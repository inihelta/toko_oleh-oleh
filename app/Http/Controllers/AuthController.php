<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display view.
     */
    public function loginPage()
    {
        return view('login');
    }
    public function registerPage()
    {
        return view('register');
    }
    /**
     * Login function.
     */
    public function login(Request $req)
    {
        $credential = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember = $req->boolean('remember');

        if (Auth::attempt($credential, $remember)) {
            $req->session()->regenerate();

            return redirect()->intended('pesertalomba');
        }

        return back()->withErrors([
            'email' => 'email atau password salah',
        ])->onlyInput('email');
    }
    /**
     * Register function.
     */
    public function register(Request $req)
    {
        $data = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        Auth::login($user);

        return redirect('login')->with('success', 'Akun berhasil dibuat, silahkan login');
    }
    /**
     * Logout function.
     */
    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('login');
    }
}
