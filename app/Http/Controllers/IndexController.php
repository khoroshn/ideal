<?php

namespace App\Http\Controllers;

use App\Repositories\SliderRepository;
use App\Repositories\ProductRepository;
use Encore\Admin\Config\Config;
use Illuminate\Http\Request;


class IndexController extends SiteController
{

    
    //work in the 'theme' on THEME settings environment
    
    public function __construct(SliderRepository $s_rep, ProductRepository $sale_rep)
            $this->sale_rep = $sale_rep;
            $this->s_rep = $s_rep;
            $this->template = env('THEME').'.index';
    }




    public function index()
    {

        if(env('THEME') != 'b4'){
            $sliderItems = $this->getSliders();

            $sale = $this->getSaleProducts();

            $sale = view(env('THEME').'.layouts.sale')->with('sale',$sale)->render();

            $sliders = view(env('THEME').'.layouts.slider')->with('sliders', $sliderItems)->render();

            $this->vars = array_add($this->vars,'sliders',$sliders);
            $this->vars = array_add($this->vars,'sale',$sale);


            $this->keywords = 'Ideal';
            $this->meta_desc = 'Ideal';
            $this->title = 'Ideal';


            return $this->renderOut();
        } else {
            echo "string";
        }

    }




    public function getSliders(){
        $sliders = $this->s_rep->get();
        return $sliders;
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

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
