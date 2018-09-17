<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repositories\MenuRepository;
use Illuminate\Http\Request;
use Menu;

class SiteController extends Controller
{
    //Slider
    protected $s_rep;


    //All product
    protected $all_products;

    //SaleProducts
    protected $sale_rep;


    protected $keywords;
    protected $meta_desc;
    protected $title;


    protected $template;
    //Variables
    protected $vars;



    protected function renderOut(){


        $categories=Category::all()->toHierarchy();

        $topbar = view(env('THEME').'.layouts.topbar')->render();

        $nav = view(env('THEME').'.layouts.nav')
            ->with('categories', $categories)
            ->render();

        $footer = view(env('THEME').'.layouts.footer')->render();

        $this->vars = array_add($this->vars,'topbar',$topbar);

        $this->vars = array_add($this->vars,'nav',$nav);

        $this->vars = array_add($this->vars,'footer',$footer);

        $this->vars = array_add($this->vars,'keywords',$this->keywords);
        $this->vars = array_add($this->vars,'meta_desc',$this->meta_desc);
        $this->vars = array_add($this->vars,'title',$this->title);

        return view($this->template)->with($this->vars);
    }

    protected function getSaleProducts(){
        $saleProducts = $this->sale_rep->get('*',config('saleNum'))->load('images');
        return $saleProducts;
    }

}
