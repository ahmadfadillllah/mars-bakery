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
Route::get('/show/{id}',[HomeController::class, 'show'])->name('home.show');
Route::get('/about',[HomeController::class, 'about'])->name('home.about');
Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');
Route::post('/logout',[HomeController::class, 'logout'])->name('home.logout');

Route::get('/login-register',[HomeController::class, 'login_register'])->name('home.login_register');
Route::post('/login-register/login',[HomeController::class, 'login_register_post_login'])->name('home.postlogin');
Route::post('/login-register/register',[HomeController::class, 'login_register_post_register'])->name('home.postregister');


Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login/post',[AuthController::class, 'loginpost'])->name('login.post');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){

    Route::get('/dashboard/index',[DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/dashboard/kategori',[KategoriController::class, 'index'])->name('kategori.index');
    Route::post('/dashboard/kategori/insert',[KategoriController::class, 'insert'])->name('kategori.insert');
    Route::get('/dashboard/kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori.edit');
    Route::post('/dashboard/kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori.update');
    Route::get('/dashboard/kategori/delete/{id}',[KategoriController::class, 'delete'])->name('kategori.delete');

    Route::get('/dashboard/produk',[ProdukController::class, 'index'])->name('produk.index');
    Route::post('/dashboard/produk/insert',[ProdukController::class, 'insert'])->name('produk.insert');
    Route::get('/dashboard/produk/edit/{id}',[ProdukController::class, 'edit'])->name('produk.edit');
    Route::post('/dashboard/produk/update/{id}',[ProdukController::class, 'update'])->name('produk.update');
    Route::get('/dashboard/produk/delete/{id}',[ProdukController::class, 'delete'])->name('produk.delete');

    Route::get('/dashboard/customer',[CustomerController::class, 'index'])->name('customer.index');

    Route::get('/dashboard/laporan-penjualan',[LaporanPenjualanController::class, 'index'])->name('laporanpenjualan.index');

    Route::get('/dashboard/profil',[ProfilController::class, 'index'])->name('profil.index');
    Route::post('/dashboard/profil/change-password',[ProfilController::class, 'changepassword'])->name('profil.changepassword');
    Route::post('/dashboard/profil/change-picture',[ProfilController::class, 'changepicture'])->name('profil.changepicture');
});

