<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        // return view('page.index', compact('slide'));
        $new_product = Product::where('new',1)->get();
        return view('page.index', compact('slide','new_product'));
    }

}
