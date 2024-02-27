<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function store(Request $request){
        $schools = [1,2,3];

       $teacher= Teacher::create([
            'name'=>'محمد نجمی',
            'personnel_code'=>'65653',
            'email'=>'mohammad_najmi@yahoo.com',
            'age'=> 27,
            'city'=>'tehran',
            'phone'=>'09121000500'
        ]);   
        
        $teacher->schools()->attach($schools);

        
    }
}
