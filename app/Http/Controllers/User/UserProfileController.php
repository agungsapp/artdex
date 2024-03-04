<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'posts' => Post::where('users_id', Auth::id())->get()
        ];

        // dd($data);

        return view('user.profile.index', $data);
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
        // Validasi formulir jika diperlukan
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif', // Sesuaikan dengan kebutuhan Anda
            'name' => 'required|string|max:255',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Dapatkan data pengguna yang akan diupdate
        $user = User::find($id);

        // Proses upload gambar
        if ($request->hasFile('image')) {
            $imagePath = 'assets/gallery/' . uniqid() . '.' . $request->image->extension();
            Storage::putFileAs('public', $request->file('image'), $imagePath);

            // Simpan path gambar ke dalam database
            $user->image = $imagePath;
        }

        // Update informasi lainnya
        $user->name = $request->input('name');
        // Tambahkan update untuk kolom lainnya sesuai kebutuhan

        // Simpan perubahan ke database
        $user->save();

        // Redirect atau kembali ke halaman yang sesuai
        return redirect()->back();
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
    }
}
