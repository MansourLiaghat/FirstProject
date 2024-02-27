<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('index' , compact('students'));
    }

    public function create()
    {
        return view('student_create');
    }

    public function store(Request $request)
    {
        $student = Student::find($request->enterId);
        if(!$student){
            $student = Student::create($request->all());
            /* The construct command can also be given as an array */
        }
        return view('student_show' , compact('student'));
    }

    public function show(string $id)
    {

    }

    public function edit(Student $student){
        return view('student_edit' , compact('student'));
    }

    public function update(Request $request, string $student){
        $student = Student::find($student);
        $student->update($request->all());
        return redirect()->route('student.index');
    }

    public function destroy(string $student)
    {
        $student = Student::find($student);
        $student->delete();      
        return redirect()->route('student.index');
  
    }
}
