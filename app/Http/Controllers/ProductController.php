<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
    	
    	$products = Product::all();

    	return $products;
    }

    public function show($link){

    	$product = Product::where('link',$link)->first();
    	return $product;
    }
}
