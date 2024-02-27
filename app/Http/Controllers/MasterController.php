<?php

namespace App\Http\Controllers;

use App\Models\master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function create(){
         $courses = [1,2,3];

         $master= master::create([
            'name'=>'دکتر موسوی',
            'personnel_code'=>'123456',
            'email'=>'reza_mosavi@yahoo.com',
            'age'=> 39,
            'city'=>'tehran',
            'phone'=>'09121575700'
        ]);  
    $master->courses()->attach($courses);

    }
}
