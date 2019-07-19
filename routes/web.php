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
    return view('welcome');
})->name('user');


Route::get('/usuarios','User_Controller@index')->name('user.index');

Route::get('/usuarios/{id}/edit','User_Controller@edit')->where('id','[0-9]+');

Route::get('/usuarios/{id}','User_Controller@show')
    ->where('id','[0-9]+')
    ->name('user.show');

route::get('/usuarios/nuevo', 'User_controller@create');

route::post('/usuarios/crear', 'User_Controller@store')->name('store');

route::get('/usuarios/{user}/editar','User_Controller@editdata')->name('user.edit');