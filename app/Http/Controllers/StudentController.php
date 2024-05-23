<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    private $columns = ['name','student_id','age'];
    public function index()
    {
        $student = Student::get();
        return view('student', compact('student'));
    }
     public function create()
    {
        return view('addStudent');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100|min:5',
            'student_id'=> 'required|<min:11>',
            'age'=>'required',
        ]);

        Student::create($data);
        return redirect('student');
    }
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('showStudent',compact('student'));
    }

    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('editStudent',compact('student'));
    }
    public function update(Request $request, string $id)
    {
        Student::where('id', $id)->update($request->only($this->columns));
        return redirect('student');
    }
    public function destroy(Request $request)
    {
        $id= $request->id;
        Student::where('id', $id)->delete();
        return redirect('student');
    }
    public function trash()
    {
        $trash = Student::onlyTrashed()->get();
        return view('trashStudent', compact('trash'));

    }
    public function restore (string $id)
    {
      Student::where('id',$id)->restore();
    
      return redirect('student');
     }
     public function forceDelete(Request $request)
{
    
    {
        $id= $request->id;
       Student::where('id', $id)->forceDelete();
        return redirect('trashStudent');

    }
}
}