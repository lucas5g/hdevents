<?php

use Illuminate\Support\Facades\Route;

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
   
    return view('welcome', [
        'nome' => 'Matheus',
        'idade' => 28,
        'profissao' => 'Programador',
        'arr' => [1,2,3,4,5],
        'names' => ['Mathues', 'Maria', 'João', 'Saulo', 'Lucas']
    ]);
});
Route::get('/contact', function() {
    return view('contact');
});

Route::get('/produtos', function() {
    return view('products');
});