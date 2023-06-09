<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        // return dd($credential);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            if (Auth::user()->level == 'admin') {
                return redirect()->intended('/dashboard');
            } elseif (Auth::user()->level == 'dosen') {
                return redirect()->intended('/landing');
            }
        }
        return back()->withErrors([
            'loginError' => 'Wrong username or password',
        ]);
    }

   public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
