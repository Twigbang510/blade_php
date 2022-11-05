<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleNhapSV;

class FormController extends Controller
{
    public function getView()
    {
        return view('form');
    }

    public function displayInfo (RuleNhapSV $Request ){
        $user=[
            'name' => $name = $Request->input("name"),
            'age' => $name = $Request->input("age"),
            'date' => $name = $Request->input("date"),
            'phone' => $name = $Request->input("phone"),
            'web' => $name = $Request->input("web"),
            'address' => $name = $Request->input("address")
        ];
        return view('form')->with('user,$user');
    }
}
