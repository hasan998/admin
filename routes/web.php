<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [UserController::class, 'index'])->name('beranda.index');
Route::get('/menu', [UserController::class, 'menu'])->name('menu.index');
Route::get('/tentang-kami', [UserController::class, 'about'])->name('tentangKami.index');
Route::get('/keranjang', [UserController::class, 'cart'])->name('keranjang.index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
    Route::get('/produk', [AdminController::class, 'produk'])->name('produk.index');
});

Route::middleware('auth:admin')->group(function () {
      
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('login',[LoginAdminController::class,'index'])->name('adminlogin.index');
    Route::post('login',[LoginAdminController::class,'login'])->name('adminlogin.login');
    Route::post('logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
