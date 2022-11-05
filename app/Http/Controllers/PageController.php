<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\TypeProducts;


class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        // return view('page.index', compact('slide'));
        $new_product = Product::where('new',1)->paginate(8);
        $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->paginate(4);    
        return view('page.index', compact('slide','new_product','sanpham_khuyenmai'));
    }
    public function getLoaiSp($type)
    {
        $type_product = TypeProducts::all();
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);

        return view('page.product_type', compact('type_product', 'sp_theoloai', 'sp_khac'));
    }

}
