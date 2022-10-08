<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

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

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('/homepage',[HomeController::class, 'homepage'])->name('home.index');
Route::get('/show/{id}',[HomeController::class, 'show'])->name('home.show');
Route::get('/about',[HomeController::class, 'about'])->name('home.about');
Route::get('/contact',[HomeController::class, 'contact'])->name('home.contact');

Route::post('/logout',[HomeController::class, 'logout'])->name('home.logout');
Route::get('/login-register',[HomeController::class, 'login_register'])->name('home.login_register');
Route::post('/login-register/login',[HomeController::class, 'login_register_post_login'])->name('home.postlogin');
Route::post('/login-register/register',[HomeController::class, 'login_register_post_register'])->name('home.postregister');

Route::get('/forgot-password', function () {
    return view('home.forgot_password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['success' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('home.reset_password', ['token' => $token, 'email' => request()->get("email")]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('home.login_register')->with('success', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login/post',[AuthController::class, 'loginpost'])->name('login.post');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:customer,admin']], function(){
    Route::get('/customer/homepage',[CustomerController::class, 'index'])->name('customer.index');
    Route::get('/customer/about', [CustomerController::class, 'about'])->name('customer.about');
    Route::get('/customer/contact',[CustomerController::class, 'contact'])->name('customer.contact');

    Route::get('/customer/cart',[CartController::class, 'index'])->name('cart.index');
    Route::post('/customer/cart/insert',[CartController::class, 'insert'])->name('cart.insert');
    Route::post('/customer/cart/update',[CartController::class, 'updatecart'])->name('cart.update');
    Route::get('/customer/cart/delete/{id}',[CartController::class, 'deletecart'])->name('cart.delete');

    Route::get('/customer/checkout',[CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/customer/checkout/update',[CheckoutController::class, 'update'])->name('checkout.update');
    Route::post('/customer/checkout/proses',[CheckoutController::class, 'proses'])->name('checkout.proses');

    Route::get('/customer/pesanan',[CheckoutController::class, 'pesanan'])->name('pesanan.index');

});

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

    Route::get('/dashboard/laporan-penjualan',[LaporanPenjualanController::class, 'index'])->name('laporanpenjualan.index');

    Route::get('/dashboard/profil',[ProfilController::class, 'index'])->name('profil.index');
    Route::post('/dashboard/profil/change-password',[ProfilController::class, 'changepassword'])->name('profil.changepassword');
    Route::post('/dashboard/profil/change-picture',[ProfilController::class, 'changepicture'])->name('profil.changepicture');

    Route::get('/pemesanan-list',[HomeController::class, 'pemesananList'])->name('pemesanan-list');

    Route::post('/konfirmasi-pesanan',[CheckoutController::class, 'konfirmasiPesanan'])->name('konfirmasi-pesanan');
    Route::post('/dalam-perjalanan',[CheckoutController::class, 'perjalanan'])->name('dalam-perjalanan');
    Route::post('/selesai',[CheckoutController::class, 'pesananSelesai'])->name('selesai');



    // laporan
    Route::get('/laporan-mingguan',[LaporanController::class, 'laporanMingguan'])->name('laporan-mingguan');
    Route::get('/laporan-bulanan',[LaporanController::class, 'laporanBulanan'])->name('laporan-bulanan');
    Route::get('/laporan-tahunan',[LaporanController::class, 'laporanTahunan'])->name('laporan-tahunan');

    // filter laporan
    Route::get('/laporan-mingguan-filter',[LaporanController::class, 'laporanMingguaFilter'])->name('laporan-mingguan-filter');
    Route::get('/laporan-mingguan-filter-chart',[LaporanController::class, 'filterChartMingguan'])->name('laporan-mingguan-filter-chart');


    Route::get('/laporan-bulanan-filter',[LaporanController::class, 'laporanBulananFilter'])->name('laporan-bulanan-filter');
    Route::get('/laporan-bulanan-filter-chart',[LaporanController::class, 'filterChartBulanan'])->name('laporan-bulanan-filter-chart');

    Route::get('/laporan-tahunan-filter',[LaporanController::class, 'laporanTahunanFilter'])->name('laporan-tahunan-filter');
    Route::get('/laporan-tahunan-filter-chart',[LaporanController::class, 'filterChartTahunan'])->name('laporan-tahunan-filter-chart');


});

