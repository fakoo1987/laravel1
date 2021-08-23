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
    return view('welcome');
});

Route::get('hola', function (){
    return "Hola";
});

Route::get('cliente/{id?}', function($id=0){
    if($id == 0){
        return "no hay cliente";
    }
    else{
        return "Id del cliente = ".$id;
    }
}) ->where("id","[0-9]+");

Route::get('producto/{id?}', function($id=0){
    return view('productoView', array('id' => $id));
})->where("id","[1-9]+");

Route::get('noticias', function () {
    return view('noticias');
})-> name('noticias');

Route::get('blog', function () {
    return view('blog');
})-> name('blog');
