<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function registrasi(Request $request)
    {
        $attribute = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);
        $attribute['password'] = Hash::make($request->password);
        $user = User::create($attribute);
        UserRole::create([
            'user_id' => $user->id,
            'user_id' => 3
        ]);
        return redirect()->intended('/');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('loginError', 'login failed, please sign-in again!');
        }
        $request->session()->regenerate();
        return redirect()->intended('/card');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
