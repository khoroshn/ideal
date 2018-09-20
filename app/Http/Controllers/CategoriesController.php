<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function init_root ()
    {
        //if you need init root category uncomment this row and add this route path /** Route::get('cat_init','CategoriesController@init_root'); **/ to routes/web.php
        //$root=Category::create(['name' => 'Fashion']);
    }

    public function index()
    {

        $categories=Category::all()->toHierarchy();
        return response()->json($categories);
        //return view('admin.categories.index', compact('categories'));
    }



       public function category($name)
    {

        $categories = Category::where('name', '=', $name)->first(['created_at']);

        if($categories){

        } else {
            $categories = "Category name not found!";
        }

        return response()->json($categories);

    }

    public function branch ($name = "Fashion"){
        $branch = Category::where('name', '=', $name)->first();

        if($branch){
            $branch =  $branch->getDescendantsAndSelf()->toHierarchy();
        } else {
            $branch = "Category name not found!";
        }
        return response()->json($branch);
    }



    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
