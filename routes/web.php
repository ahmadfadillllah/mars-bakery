<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/about',[HomeController::class, 'about'])->name('home.about');
Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');

Route::get('/login-register',[HomeController::class, 'login_register'])->name('home.login_register');

Route::get('/login',[AuthController::class, 'login'])->name('login');

Route::get('/dashboard/index',[DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard/kategori',[KategoriController::class, 'index'])->name('kategori.index');

Route::get('/dashboard/produk',[ProdukController::class, 'index'])->name('produk.index');

Route::get('/dashboard/customer',[CustomerController::class, 'index'])->name('customer.index');

Route::get('/dashboard/laporan-penjualan',[LaporanPenjualanController::class, 'index'])->name('laporanpenjualan.index');

Route::get('/dashboard/profil',[ProfilController::class, 'index'])->name('profil.index');
