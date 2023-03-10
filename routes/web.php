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
Route::get('above', function () {
    $name ="mohamed";
    //return view('above',['name1' => $name]);
    //return view('above' -with('name1' ,$name));
    return view('above' ,compact('name'));
});
