<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Group;

use Illuminate\Http\Request;

class bs4Controller extends Controller
{
    public function index()
    {

    	//Get all categories for menu builder
 		$categories=Category::all()->toHierarchy();

 		//Get products New & Sale & Recomended & Hot or other products in Groups for index page
 		$products=Product::with('groups')->get();


 		$grouped=Product::has('groups')->get();
 		//$grouped=Product::has('groups')->get();
        $grouped->load('categories');
        $grouped->load('groups');
        $grouped->load('images');

        

		return view(env('THEME').'.index')->with('grouped', $grouped);

    }
}
