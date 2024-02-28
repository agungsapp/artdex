<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Alert;
use App\Models\Notification;
use App\Notifications\NotificationBackend;
use Illuminate\Support\Facades\File;
Use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    
    public function index()
    {
        $data['items'] = Teacher::all()->sortDesc();
        
        return view('pages.admin.teacher.index',$data);
        
    }

    
    public function create()
    {
        return view('pages.admin.teacher.create');
    }

   
    public function store(TeacherRequest $request)
    {
        $request->validate([
            'email'             => 'required|max:255|unique:users,email',
            'phone'             => 'required|unique:users,phone',
        ]);

        try {
            $data = $request->all();
            $data['roles'] = 'TEACHER';
            $data['password'] = Hash::make($request->password);

            $request->file('image') != null ? $data['image'] = $request->file('image')->store('assets/gallery', 'public') : null;
            
            $item = Teacher::create($data);
            // Notification Start
            $enrollmentData = [
                'datas'               => 'New user ',
                'from'                => strtok($item->name, " "),
                // 'from'                => $items_customers->name,
                // 'merchants_id'         => $request->adfood_merchants_id,
                // 'merchants_id'         => $items_customers->id,
            ];
            $item->notify(new NotificationBackend($enrollmentData));
            // Notification::send($item, new NotificationBackend($enrollmentData));
            // Notification End


            
            Alert::success('Teacher Added', $item->title.' Successfully Added');        
            return redirect()->route('teacher.index');

        } catch (Exception $e) {
            return back()->with('message', $e->getMessage());
        }   
    }
    
    public function show($id)
    {
        $data['item'] = Teacher::findOrFail($id);
        return view('pages.admin.teacher.show',$data);
    }

    
    public function edit($id)
    {
        $data['item'] = Teacher::findOrFail($id);
        return view('pages.admin.teacher.edit',$data);
        
    }

    
    public function update(TeacherRequest $request, $id)
    {
        $request->validate([
            'email'             => 'required|email|max:255|unique:users,email,'.$id,
            'phone'             => 'required|unique:users,phone,'.$id,
        ]);

        try {
            $item = Teacher::findOrFail($id);

            if ($request->file('image') != null) {
                // delete image
                if(File::exists(('storage/'.$item->image))){
                    File::delete('storage/'.$item->image);            
                }
                // store image
                $path  = $request->file('image')->store('assets/gallery', 'public');
            } else {
                $path = $item->image;
            }

            if($request->password != null){
                $password = Hash::make($request->password);
            } else{
                $password = $item->password;
            }

            $item->update([
                'image'         => $path,
                'name'          => $request->name,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'password'      => $password,
                'gender'        => $request->gender,
                'dob'           => $request->dob,
                'address'       => $request->address,
                'long'          => $request->long,
                'lat'           => $request->lat,
                'jumlah_hafalan'=> $request->jumlah_hafalan,
                'sanad'         => $request->sanad,
                'online'        => $request->online ?? null,
                'offline'       => $request->offline ?? null,
            ]);
            
            Alert::success('Teacher', $item->name.' Successfully Updated');        
            return redirect()->route('teacher.index');

        } catch (Exception $e) {
            return back()->with('message', $e->getMessage());
        }   
    }

    public function destroy($id)
    {
        $item = Teacher::findOrFail($id);
        
        if(File::exists(('storage/'.$item->image))){
            File::delete('storage/'.$item->image);            
        }

        $item->delete();

        Alert::success('Teacher ', $item->name.' Successfully Delete');        
        return redirect()->route('teacher.index');
    }

    public function change_status($id)
    {
        $item = Teacher::findOrFail($id);
        if ($item->email_verified_at == null) {
            $item->update([ 'email_verified_at' => now()]);
        } else {
            $item->update([ 'email_verified_at' => null]);
        }
        

        Alert::success('Teacher ', $item->name.' Successfully Change Verified');        
        return redirect()->route('teacher.index');
    }
}
