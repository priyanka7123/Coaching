<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function apply()
    {
        if (Student::where('user_id', Auth::id())->exists()) {
            return redirect()->route('profile');
        }

        return view("homepage.apply");
    }
    public function applyStore(Request $request)
    {
        if (Student::where('user_id', Auth::id())->exists()) {
            return redirect()->route('profile');
        }



        $filname = time() . "." . $request->dp->extension();

        $request->dp->move(public_path('upload'), $filname);

        Student::create([


            'contact' => $request->contact,
            'user_id' => Auth::id(),
            'dob' => $request->dob,
            'gender' => $request->gender,
            'school' => $request->school,
            'nationality' => $request->nationality,
            'dp' => $filname,
        ]);

        return redirect()->back();
    }
    public function profile()
    {
        if (User::where([['id', Auth::id()], ['isTeacher', TRUE]])->exists()) {
            return redirect()->route('admin.dashboard');
        }

        //check data is exist or not
        if (Student::where('user_id', Auth::id())->doesntExist()) {
            return redirect()->route('apply');
        }

        // $data['students'] = Student::findOrFail(Auth::id());


        $data['students'] = Student::where('user_id', Auth::id())->firstOrFail();
        return view('homepage.profile', $data);
    }
}
