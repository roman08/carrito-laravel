<?php

namespace App\Http\ViewComposers;
use App\Category;
use Illuminate\Contracts\View\View;

/**
* 
*/
class NavComposer
{
	public function compose(View $view){
		$categories = Category::all();
		$view->with('categories', $categories);
	}
}