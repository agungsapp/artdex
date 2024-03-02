<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class AdminLoginController extends Controller
{
    //
    // use AuthenticableTrait;


    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $admin = AdminModel::where('username', $credentials['username'])->first();

        if (!$admin || !password_verify($credentials['password'], $admin->password)) {
            // Authentication failed
            return redirect()->route('admin.login')->with('error', 'Invalid username or password');
        }

        // Authentication passed
        Auth::login($admin);

        return redirect()->intended('/app/dashboard'); // Redirect to the dashboard or any desired page

    }
}
