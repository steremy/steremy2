<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;



class PagesController extends Controller
{
    
    public function home(){
        $products=\App\Product::all();
        return view('home', compact('products'));
    }
}
