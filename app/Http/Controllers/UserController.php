<?php

namespace App\Http\Controllers;

use Igaster\LaravelCities\Geo;
use MenaraSolutions\Geographer\Earth;
use MenaraSolutions\Geographer\Country;
use MenaraSolutions\Geographer\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends SiteController
{

    public function __construct(){
        $this->template = env('THEME').'.user.index';
    }

    public function index()
    {
        $content = Auth::user();
        $content = view(env('THEME').'.user.content')
            ->with('content',$content)->render();
        $this->vars = array_add($this->vars,'content',$content);

        $this->keywords = 'Ideal';
        $this->meta_desc = 'Ideal';
        $this->title = 'Ideal';

        return $this->renderOut();
    }

    public function data()
    {

        $earth = new Earth();
        $content = Auth::user();
        $countries = $earth->getCountries();
        $content = view(env('THEME').'.user.data')
            ->with('countries',$countries)
            ->with('content',$content)->render();
        $this->vars = array_add($this->vars,'content',$content);

        $this->keywords = 'Ideal';
        $this->meta_desc = 'Ideal';
        $this->title = 'Ideal';

        return $this->renderOut();
    }

    public function getCountries()
    {
        $earth = new Earth();
        $countries = $earth->getCountries();
        return $countries;
    }

    public function getRegion($iso)
    {
        $country = Country::build($iso);
        $region = $country->getStates()->toArray();
        return $region;
    }

    public function storeAjax(Request $request)
    {
        return $request;
    }
}
