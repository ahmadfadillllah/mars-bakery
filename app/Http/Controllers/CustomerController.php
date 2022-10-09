<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::with('produk')->where('stokproduk', '>=', '1')->get();

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        $item = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        $total = $item->sum('total_harga');

        if(Auth::user()){
            return view('home.customer.home', compact('kategori', 'produk','cart', 'total'));
        }else{
            return redirect()->route('home.index')->with('info', 'Anda Belum Login');
        }
    }

    public function about()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::with('produk')->get();

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        $item = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        $total = $item->sum('total_harga');

        if(Auth::user()){
            return view('home.customer.about', compact('kategori', 'produk','cart', 'total'));
        }else{
            return redirect()->route('home.index')->with('info', 'Anda Belum Login');
        }
    }

    public function contact()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::with('produk')->get();

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        $item = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        $total = $item->sum('total_harga');

        if(Auth::user()){
            return view('home.customer.contact', compact('kategori', 'produk','cart', 'total'));
        }else{
            return redirect()->route('home.index')->with('info', 'Anda Belum Login');
        }
    }

    public function list()
    {
        $customer = User::where('role', 'customer')->get();
        return view('admin.dashboard.customer', compact('customer'));
    }
}
