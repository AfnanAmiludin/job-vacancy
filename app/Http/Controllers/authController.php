<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
            'role_id' => 3
        ]);
        return redirect()->intended('/');
    }
    public function regisAlumni(Request $request)
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
            'role_id' => 2
        ]);
        return redirect()->intended('/');
    }
    public function regisAdmin(Request $request)
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
            'role_id' => 1
        ]);
        return redirect()->intended('/');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        $email = User::where('email', $request->email)->first();
        if (!$email) {
            return back()->with('loginError', 'login failed, please sign-in again!');
        } else if (!$email->row_active) {
            return back()->with('loginError', 'Admin Does not confirm account, wait for minute!');
        } else if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('pageError', 'Admin Does not confirm account, wait for minute!');
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
