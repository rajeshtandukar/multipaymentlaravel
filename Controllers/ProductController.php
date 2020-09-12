<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	public function list()
	{
		$products  = Product::all();
		return view('product-list', compact('products'));
	}  
}
