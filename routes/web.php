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

// Route::get('/', function () {
//     return view('home.index');
// });
Route::get('/', function () {
    return view('layout.master');
});

/*Route::get('test', function () {
    $DanhMuc=DB::table('danhmuc')->get();
    return view('test',compact('DanhMuc'));
});*/

