<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Encore\Admin\Config\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //admin config
        Config::load();

        //@set ($i,0)
        Blade::directive('set',function($exp){
            list($name,$val) = explode(',',$exp);
            return "<?php $name = $val ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
