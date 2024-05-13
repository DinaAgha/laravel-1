<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class students2Controller extends Controller
{
   private $columns = ['name','id','age'];
   public function index()
   {
    $students= Student::get();
    return view('students', compact('students'));
   }


public function create()
{
    return view('addStudent');
}

public function store(Request $request)
{
    Student::create($request->only($this->columns));
    return redirect('students');
}
public function show(string $id)
{
    //
}
public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
   
        //
    }

}