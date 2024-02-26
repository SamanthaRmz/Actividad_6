
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', 'ProductoController@index')->name('productos.index');
Route::get('/productos/create', 'ProductoController@create')->name('productos.create');
Route::get('/productos/{producto}/edit', 'ProductoController@edit')->name('productos.edit');
