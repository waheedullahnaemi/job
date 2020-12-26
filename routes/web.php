<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(['perfix' => '{language}'], function () {

	Route::get('/home/{lang}' , function ($lang) {
		App::setlocale($lang);
    	return view('home');
	});

	Route::get('/printview/{lang}', function($lang){
		 App::setlocale($lang);
		 return view('printJobSummary');
	});

});

