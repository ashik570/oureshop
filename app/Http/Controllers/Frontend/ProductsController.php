<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    public function index(){
    	$products = product::orderBy('id','desc')->paginate(6);
    	return view('frontend.pages.product.index')->with('products', $products);
    }
    public function show($slug){
    	$product = product::where('slug',$slug)->first();
    	if(!is_null($product)){
    		return view('frontend.pages.product.show', compact('product'));
    	}else{
    		session()->flash('errors','Sorry !! There is no product by this URL..');
    		return redirect()->route('products');
    	}
    }
}



































