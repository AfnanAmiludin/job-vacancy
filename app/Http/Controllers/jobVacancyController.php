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
        $getUser = User::all();
        $dataAll = count($getUser);

        return view('card', compact('getAll', 'dataAll'));
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
            'telephone' => ['required'],
            'file' => ['required']
        ]);
        $attribute['file'] = $request->file('file')->store('post-file');
        $job = JobVacancy::create([
            'potition' => $attribute['potition'],
            'name' => $attribute['name'],
            'address' => $attribute['address'],
            'salary' => $attribute['salary'],
            'description' => $attribute['description'],
            'email' => $attribute['email'],
            'telephone' => $attribute['telephone'],
            'file' => $attribute['file']
        ]);
        $users = User::all();
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new UserEmail($user, $job));
        }
        return redirect()->intended('/card');
    }
    public function download(JobVacancy $id)
    {
        $jobVacancy = JobVacancy::where('id', $id->id)->first();
        if (!$jobVacancy->file) {
            return back()->with('nullData', 'Not found file!');
        }
        $pathToFile = public_path("storage/{$jobVacancy->file}");
        return response()->download($pathToFile);
    }
}
