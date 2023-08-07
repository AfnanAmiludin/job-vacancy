<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function confirm()
    {
        $user = User::where('row_active', false)->get();
        return view('confirm', compact('user'));
    }
    public function dataUser(User $data)
    {
        $user = User::where('id', $data->id)->first();
        $user->row_active = true;
        $user->save();
        return redirect()->intended('/confirm');
    }
}
