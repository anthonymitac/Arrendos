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

Route::get('/', function () {
    $lessor=App\Lessor::findOrFail(2);
    //dd($lessor);
    //foreach ($locals as $less){
        
        return $lessor ->locals;
    
    //}
    //return $lessor->locals;
});


Route::resource('lessor','LessorController');
