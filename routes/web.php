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

//Route::get('/', function () {
//    return view('welcome');
//});
//PARA VER TODOS LOS LESSORS
//Route::get('/lessor','LessorController@lessorList');

//PARA AGREGAR A LOS LESSORS
//Route::get('/lessor/create','LessorController@addLessor');

//METODO POST QUE AYUDA A AGREGAR LESSORS
//Route::post('/lessor/create','LessorController@storeLessor');

//VER EL MENU PARA LOS LESSOR


//RUTA PARA ACTUALIZAR LESSORS

Route::resource('lessor','LessorController');
//->only(['index','update'
//]);

//Route::get('/lessor/editLessor/{codeLessor}','LessorController@editLessor');

//Route::post('/lessor/editLessor/{codeLessor}','LessorController@updateLessor');

