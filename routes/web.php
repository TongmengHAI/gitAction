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
Route::get('/info', function () {
    return [
        'data'=>'i4gic'
    ];
});
Route::post('/product/add', function (Illuminate\Http\Request $request) {
    $request->validate([
        'name'=>'required',
        'price'=>'required'
    ]);
    return ['status'=>'SUCCESS'];
});
