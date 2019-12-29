<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class NewproductController extends Controller
{
    public function index(){
    	$products = product::orderBy('price','desc')->paginate(6);
    	return view('frontend/pages/product/newproduct')->with('products', $products);
    }
}
