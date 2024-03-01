<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUsersManageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = [
            'users' => User::all()
        ];



        return view('admin.user_manage.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'user' => User::find($id),
        ];


        return view('admin.user_manage.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $password = null;
        try {
            if (empty($request->password)) {
                $password = $request->old_password;
            } else {
                $password = Hash::make($request->password);
            }
            // Retrieve the user by ID
            $user = User::find($id);

            // Check if the user exists
            if ($user) {
                // Update user data
                $user->update([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => $password,
                    'phone' => $request->phone,
                    'status' => $request->status,
                    'activate' => $request->activate
                ]);

                alert('Success!', 'Successfully updated user data!', 'success');
            } else {
                alert('Error', 'User not found!', 'error');
            }

            return redirect()->route('app.user-manage.index');
        } catch (\Throwable $th) {
            throw $th;
            // Log the error or handle it appropriately
            alert('Error', 'Error in the system', 'error');
            return redirect()->back();
        }
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd('oke');
        try {
            User::destroy($id);

            alert()->success('Success!', 'Successfully to delete user data !');


            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            return alert()->error('Error', 'error in system');
        }
    }
}
