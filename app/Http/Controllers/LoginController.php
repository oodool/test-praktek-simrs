<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // store login info in session
            session(['user_id' => $user->id, 'username' => $user->username, 'role' => $user->role]);
            return redirect()->route('doctor.index')->with('success', 'Berhasil login!');
        }

        return back()->withErrors(['login' => 'Username atau password salah.']);
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login')->with('success', 'Berhasil logout.');
    }
}
