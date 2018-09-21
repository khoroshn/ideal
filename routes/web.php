<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

//One page app START


/*Route::get('/', function(){
    return view('index');
});*/


//One page app END


//Auth
Auth::routes();


//BS4 Controller

Route::get('/', 'bs4Controller@index');


Route::get('check-queue', function(){
    Mail::to('adm@ideal.com')->send(new TestMail());
    return 'Working';
});

