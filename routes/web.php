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
    $pasta = config('pasta');
    return view('home', [
        'pastaList' => $pasta
    ]);
});

Route::get('/product/{id?}', function ($id=null) {
    $pasta = config('pasta');
    if(empty($id) || $id > count($pasta)) {
        return redirect('/');
    }
    return view('product',[
        'id' => $id,
        'pastaList' => $pasta
        ]);
});
