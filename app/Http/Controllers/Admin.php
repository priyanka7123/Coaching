<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(Request $request)
    {
        if (User::where([['id', Auth::id()], ['isTeacher', FALSE]])->exists()) {
            return redirect()->route('profile');
        }
        $data['students'] = Student::all()->count();
        return view('admin.dashboard', $data);
    }
    public function students(Request $request)
    {
        $data['students'] = Student::all();
        return view('admin.students', $data);
    }
}
