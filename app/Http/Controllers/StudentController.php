<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function apply()
    {

        return view("homepage.apply");
    }
    public function applyStore(Request $request)
    {



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
        // $data['students'] = Student::findOrFail(Auth::id());
        $data['students'] = Student::where('user_id', Auth::id())->firstOrFail();
        return view('homepage.profile', $data);
    }
}
