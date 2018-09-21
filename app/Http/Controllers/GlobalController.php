<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repositories\MenuRepository;
use Illuminate\Http\Request;
use Menu;

class GlobalController extends Controller
{

    protected $template;

    protected $vars;

    protected function renderOut(){

        $categories=Category::all()->toHierarchy();

        $nav = view(env('THEME').'.layouts.navbar')
            ->with('categories', $categories)
            ->render();

        $this->vars = array_add($this->vars,'navbar',$nav);

        return view($this->template)->with($this->vars);
    }

}
