<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class ShopController extends SiteController
{
    public function __construct(ProductRepository $all_products){



        $this->all_products = $all_products;

        $this->template = env('THEME').'.shop.index';
    }
    public function index()
    {
        $content = $this->getAllProducts();
        //Cart::add('192ao12', 'Product 1', 1, 9.99);
        //$cart = Cart::content()->count();

        $content = view(env('THEME').'.shop.content')
                                                ->with('content',$content)->render();
        $this->vars = array_add($this->vars,'content',$content);

        $this->keywords = 'Ideal';
        $this->meta_desc = 'Ideal';
        $this->title = 'Ideal';

        return $this->renderOut();
    }


    protected function getAllProducts(){
        $all_products = $this->all_products->get('*')->load('images');
        return $all_products;
    }


    protected function getTreeProduct($path){

        $count = count($path);

        $cat_products = Category::where('path', '=', $path[$count-1])->get();

        if(count($cat_products)==1){
            $cat_products = Category::where('path', '=', $path[$count-1])->first();
            $tree_products = Product::categorized($cat_products)->get();
        } else {
            $cat_products = Category::where('path', '=', $path[$count-2])->get();
            if(count($cat_products)==1){
                $cat_products = Category::where('path', '=', $path[$count-2])->first();
                $childrens = $cat_products->children()->get();

                //dd($childrens);

                foreach($childrens as $children){
                    if($children->path == $path[$count-1]){
                        $cat_products = Category::where('id', '=', $children->id)->first();
                        $tree_products = Product::categorized($cat_products)->get();
                    }
                }

            } else {

            }
            //dd($cat_products);
        }

        return $tree_products;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($path)
    {
        $path = explode('/', $path);


        //dd($path);

        $content = $this->getTreeProduct($path);

        $route = Route::currentRouteName();
        //dd($route);
        $content = view(env('THEME').'.shop.content')
            ->with('route',$route)
            ->with('content',$content)->render();

        $this->vars = array_add($this->vars,'content',$content);

        $this->keywords = 'Ideal';
        $this->meta_desc = 'Ideal';
        $this->title = 'Ideal';

        return $this->renderOut();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
