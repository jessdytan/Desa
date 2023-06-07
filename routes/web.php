<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pendudukController;
// use App\Http\Controllers\adminController;
use App\Http\Controllers\UserController;
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

// Route::put('/admin/user/{id}',[AdminController::class,'update_user'])->name('users.update');

Route::get('/',[userController::class,'index'])->name('mainpage');

Route::post('/admin/store_data',[pendudukController::class,'store_data'])->name('store_data');

Route::get('/admin/berita/checkSlug', [AdminController::class, 'checkSlug']);

Route::prefix('admin')->group(function () {
    
    // Route::get('{id}/edit',[pendudukController::class,'edit_data'])->name('update_data');

    Route::get('login_admin',[AdminAuthController::class,'login'])->name('login.admin');
    Route::post('login_admin_logic',[AdminAuthController::class,'login_logic'])->name('login.admin_logic');
    Route::get('logout',[AdminAuthController::class,'logout'])->name('logout.admin');

    Route::get('admin',[AdminAuthController::class,'admin'])->name('admin');

    Route::get('pengaduan',[AdminAuthController::class,'pengaduan'])->name('admin.pengaduan');
    Route::get('pengaduan_masuk',[AdminAuthController::class,'pengaduan_masuk'])->name('pengaduan.masuk');
    Route::get('pengaduan_process',[AdminAuthController::class,'pengaduan_process'])->name('pengaduan.process');
    Route::post('ubah_status_selesai/{id}',[AdminAuthController::class,'ubah_status_selesai'])->name('ubah.selesai');
    Route::post('ubah_status_tolak/{id}',[AdminAuthController::class,'ubah_status_tolak'])->name('ubah.tolak');
    Route::post('ubah_status_proses/{id}',[AdminAuthController::class,'ubah_status_proses'])->name('ubah.process');
    Route::get('detail_pengaduan/{id}',[AdminAuthController::class,'detail_pengaduan'])->name('pengaduan.detail');

    Route::get('pengaduan_selesai',[AdminAuthController::class,'pengaduan_selesai'])->name('pengaduan.selesai');
    Route::get('admin/{id}/edit',[pendudukController::class,'edit_data'])->name('edit.data');
    Route::put('admin/{id}',[pendudukController::class,'update_data'])->name('update.data');
    Route::delete('admin/{id}/delete',[pendudukController::class,'delete_penduduk'])->name('penduduk.delete');
    Route::get('berita',[AdminController::class,'berita'])->name('berita');
    Route::get('komentar',[AdminController::class,'komentar'])->name('admin_komentar');
    Route::get('/tambah_berita', [AdminController::class,'tambah_berita'])->name('tambah_berita');
    Route::post('/berita/tambah', [AdminController::class,'store_berita'])->name('store_berita');
    Route::get('/berita/{id}/edit', [AdminController::class,'edit_berita'])->name('edit_berita');
    Route::delete('/berita/{id}/delete',[AdminController::class,'delete_berita'])->name('delete_berita');
    Route::delete('/komentar/{id}/delete',[AdminController::class,'delete_komentar'])->name('delete_komentar');
    Route::put('/berita/{id}',[AdminController::class,'update_berita'])->name('update_berita');
});

Route::prefix('penduduk')->group(function () {

    Route::get('/login', [UserController::class, 'login'])->name('login_user');
    Route::post('/login_user_logic', [UserController::class, 'login_logic'])->name('login.user_logic');
    Route::post('/create_pengaduan', [UserController::class, 'store_pengaduan'])->name('store_pengaduan');
    Route::get('/register', [UserController::class, 'register'])->name('register_user');
    
    Route::get('/forgot', [UserController::class, 'forgot'])->name('forgot');
    Route::post('/forgot_logic', [UserController::class, 'forgot_logic'])->name('forgot_logic');
    Route::get('/reset_password', [UserController::class, 'reset'])->name('reset_pass');
    Route::put('/reset_logic', [UserController::class, 'reset_logic'])->name('reset_logic');

    Route::post('/store_register', [UserController::class, 'reg_penduduk'])->name('register');
    Route::get('/artikel/{id}', [UserController::class, 'detail_berita'])->name('detail');
    Route::post('/komentar', [UserController::class, 'komentar'])->name('komentar');
    Route::get('/pengaduan', [UserController::class, 'pengaduan'])
    ->middleware('auth')
    ->name('pengaduan');
});




// Route::post('logout', 'AdminAuthController@logout')->name('admin.logout');
// Route::post('login', 'AdminAuthController@login')->name('admin.login.submit');
// Route::get('login', 'AdminAuthController@showLoginForm')->name('admin.login');



// Route::get('/login-admin',[adminController::class,'login'])->name('admin.login');
