<?php

use App\Http\Controllers\LoginAdminController;
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

Route::get('/', function () {
    return view('halamandepan.beranda');
});
Route::get('/menu', function () {
    return view('halamandepan.menu');
});
Route::get('/dashboard', function () {
    return view('halamanadmin.dashboard.dashboard');
});
Route::get('/tentangkami', function () {
    return view('halamandepan.tentangkami');
});
Route::get('/keranjang', function () {
    return view('halamandepan.keranjang');
});
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('halamanadmin.dashboard');
    })->name('dashboard.index');   
});
Route::get('/admin/login',[LoginAdminController::class,'index'])->name('adminlogin.index');
Route::post('/admin/login',[LoginAdminController::class,'login'])->name('adminlogin.login');
Route::post('/admin/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
