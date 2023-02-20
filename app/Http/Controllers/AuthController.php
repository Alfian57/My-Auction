<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login', [
            'title' => 'Masuk'
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username_15458' => 'required',
            'password_15458' => 'required|min:8',
        ]);

        $creds = [
            'username_15458' => $request->username_15458,
            'password' => $request->password_15458,
        ];

        if ($request->role == "user") {
            if (Auth::guard('masyarakat')->attempt($creds)) {
                $request->session()->regenerate();
                return redirect()->route('home');
            }
        } else {
            if (Auth::guard('petugas')->attempt($creds)) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        }

        toast("Username atau Password Salah", 'error');
        return redirect()->route('login')->withInput();
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Daftar'
        ]);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nama_15458' => 'required|max:255',
            'username_15458' => 'required|max:255|unique:masyarakat_15458',
            'password_15458' => 'required|min:8',
            'confirm_password' => 'required|same:password_15458',
            'telp_15458' => 'required|max:25'
        ]);
        $validatedData['password_15458'] = Hash::make($request->password_15458);
        Masyarakat::create($validatedData);

        toast('Berhasil Mendaftar', 'success');
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('petugas')->check()) {
            Auth::guard('petugas')->logout();
        } else {
            Auth::guard('masyarakat')->logout();
        }

        toast('Berhasil Melakukan Logout', 'success');
        return redirect()->route('login');
    }
}
