<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('students');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'student_id' => 'required',
            'age' => 'required|integer',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Student created successfully.');
    }

    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }
}