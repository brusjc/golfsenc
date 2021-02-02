<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

//Rutas lang
Route::get('lang/{lang}', function($lang)
    {
      \Session::put('lang', $lang);
      return \Redirect::back();
    })->middleware('web')->name('change_lang');


Route::get('/', 'HomeController@home2')->name('Home2');
Route::get('/{idm}/', 'HomeController@home')->name('Home3');
Route::get('/{idm}/home', 'HomeController@home')->name('Home');






// E-mail verification
Route::get('/register/verify/{code}/{username}', 'GuestController@verify');

