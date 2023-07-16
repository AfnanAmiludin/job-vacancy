<?php

namespace App\Http\Controllers;

use App\Mail\UserEmail;
use App\Models\JobVacancy;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class jobVacancyController extends Controller
{
    public function show()
    {
        $getAll = JobVacancy::all();
        $getAdmin = UserRole::where('role_id', 1)->get();
        $dataAdmin = count($getAdmin);
        $getAlumni = UserRole::where('role_id', 2)->get();
        $dataAlumni = count($getAlumni);
        $getUmum = UserRole::where('role_id', 3)->get();
        $dataUmum = count($getUmum);

        return view('card', compact('getAll', 'dataAdmin', 'dataAlumni', 'dataUmum'));
    }
    public function create(Request $request)
    {
        $attribute = $request->validate([
            'potition' => ['required'],
            'name' => ['required'],
            'address' => ['required'],
            'salary' => ['required'],
            'description' => ['required'],
            'email' => ['required'],
            'telephone' => ['required']
        ]);
        $job = JobVacancy::create([
            'potition' => $attribute['potition'],
            'name' => $attribute['name'],
            'address' => $attribute['address'],
            'salary' => $attribute['salary'],
            'description' => $attribute['description'],
            'email' => $attribute['email'],
            'telephone' => $attribute['telephone']
        ]);
        $users = User::all();
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new UserEmail($user, $job));
        }
        return redirect()->intended('/card');
    }
}
