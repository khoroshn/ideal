<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class CheckoutController extends SiteController
{
    public function __construct(ProductRepository $all_products, ProductRepository $sale_rep){

        $this->all_products = $all_products;
        $this->sale_rep = $sale_rep;

        $this->template = env('THEME').'.checkout.index';
    }


    public function index()
    {

        $sale = $this->getSaleProducts();
        $sale = view(env('THEME').'.layouts.sale')->with('sale',$sale)->render();
        $this->vars = array_add($this->vars,'sale',$sale);


        $content = view(env('THEME').'.checkout.content')->render();
        $this->vars = array_add($this->vars,'content',$content);


        $this->keywords = 'Ideal';
        $this->meta_desc = 'Ideal';
        $this->title = 'Ideal';

        return $this->renderOut();

    }
}
