<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getIndex(){
        $name = "Trường";
        $age = "20";
        $class ="20CSE";
        $arr = [
            ['name' => $name, 'age' => $age, 'class' => $class],
            ['name' => 'Tuan', 'age' => $age, 'class' => $class],
        ];
        return view('homepage')->with('student',$arr);
    }
}
