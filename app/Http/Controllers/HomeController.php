<?php

namespace App\Http\Controllers;

use App\Models\Addproduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Addproduct::with('category','Productimage')->get();
        //dd($products);
    return view('home',compact('products'));
    }
}
