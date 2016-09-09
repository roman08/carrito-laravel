<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category;

class WelcomeController extends Controller
{
	public function index(){
		$products = Product::all();
		return view('welcome.index')->with('products', $products);
	}
	public function show($slug){
		$product = Product::findBySlugOrFail($slug);
		return view('welcome.show-product')->with('product', $product);
	}

	public function searchCategory($slug){
		$category = Category::findBySlugOrFail($slug);
		$products = $category->products()->paginate(4);
		$products->each(function($products){
			$products->category;
		});
		return view('welcome.index')->with('products', $products);
	}
}
