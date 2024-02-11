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

    public function store(Request $request){
        $student = Student::find($request->enterId);
        return view('student_show' , compact('student'));
    }

    public function edit(User $id){
        dd($id);

    }

    public function update(){

    }
}
