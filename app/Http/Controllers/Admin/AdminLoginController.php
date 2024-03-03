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
        try {
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);

            if (Auth::guard('admin')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->to(route('app.dashboard.index'));
            }

            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ])->onlyInput('username');
        } catch (\Throwable $th) {
            throw $th;
            return "fail in server";
        }
    }

    public function logout(Request $request)
    // public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->to(route('app.login'));
    }
}
