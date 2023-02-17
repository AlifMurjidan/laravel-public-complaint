<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registered(Request $request)
    {
        /**
         * Validasi data yang akan dikirim
         */
        $validated = $request->validate([
            'nama'      => 'required',
            'username'  => 'required',
            'password'  => 'required|confirmed',
        ]);

        /**
         * Input data ke database
         */
        $user = User::create([
            'nama'      => $request->nama,
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
        ]);

        /**
         * Redirect ke halaman login
         */
        return redirect()->route('login');
    }

    public function register_action(Request $request) 
    {
        $validate = $request->validate([
            'nama' => 'required', 
            'username' => 'required', 
            'password' => 'required',
            'telp' => 'required'
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);

        Masyarakat::create([
            'nik' => $request->nik,
            'user_id' =>  $user->id
        ]);

        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username'  => ['required', 'string'],
            'password'  => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Masyarakat::where('user_id', Auth::id())->exists()) {
                $request->session()->regenerate();
    
                return redirect()->route('masyarakat.dashboard');
            } else {
                $request->session()->regenerate();
    
                return redirect()->route('petugas.dashboard');
            }
        }

        return back()->withErrors([
            'username'   => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
        // return redirect('/auth/login');
    }
}
