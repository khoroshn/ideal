<?php
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('check-queue', function () {
    Mail::to('horosh3d@gmail.com')->queue(new TestMail());
    return 'working';
});



//Auth
Auth::routes();

//BS4 Controller
Route::get('/', 'bs4Controller@index');
