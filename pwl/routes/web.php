<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/11', function () {
    return view('welcome');
});

Route::get('template', function () {
    return view('template');
});

Route::get('rifqi', function () {
    return view('website.index');
});

Route::get('tampil', function () {
    $judul = 'SNMTN';
    $penulis = '<b>rifqi jabrah</b>';
    return view('website.tampil', compact( 'judul' , 'penulis'));
});

use App\Http\Controllers\PostingController1;

// Route::get('/post/{nama}', [PostingController1::class, 'show']);

Route::resource('post', PostingController1::class);

Route::get('/daftar', [PostingController1::class,'daftar']);

Route::get('/tambahuser', [UserController::class,'tambahuser']);
Route::get('/tambahuser2', [UserController::class,'tambahuser2']);
Route::get('/delete/{id}', [UserController::class,'delete']);

Route::resource('user', UserController::class);


