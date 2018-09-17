<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends SiteController
{

    public function __construct(ProductRepository $all_products, ProductRepository $sale_rep){

        $this->all_products = $all_products;
        $this->sale_rep = $sale_rep;

        $this->template = env('THEME').'.cart.index';
    }


    public function index()
    {
        //Cart::destroy();
        $cart = Cart::content();
        //dd($cart);



        $content = view(env('THEME').'.cart.content')
            ->with('cart',$cart)->render();

        $this->vars = array_add($this->vars,'content',$content);

        $sale = $this->getSaleProducts();
        
        $sale = view(env('THEME').'.layouts.sale')->with('sale',$sale)->render();

        $this->vars = array_add($this->vars,'sale',$sale);

        $this->keywords = 'Cart';
        $this->meta_desc = 'Cart';
        $this->title = 'Cart';

        return $this->renderOut();


    }
    public function itemAdd($id)
    {
        $product = Product::find($id);
        //dd($product);
        //$cartItem = Cart::add($product->id, $product->name, 1, 9.99)->associate('App\Product');
        $product->load('images');
        Cart::add($product->id, $product->name, 1, 9.99, ['images' =>  $product->images])->associate('App\Product');
        //$cartItem->associate('App\Product');
        //Cart::associate($cartItem->rowId, 'App\Product');
        return back();

    }

    public function itemRemove($id)
    {

        $rowId = $id;

        Cart::remove($rowId);
        return back();
    }
}
