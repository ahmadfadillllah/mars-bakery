<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::with('produk')->get();

        $cart = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id','produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->get();

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->get();

        $total = $item->sum('total_harga');
        return view('home.index', compact('kategori', 'produk','cart', 'total'));
    }

    public function login_register_post_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home.index')->with('success', 'Selamat datang');
        }

        return back()->withErrors([
            'email' => 'Email tidak ditemukan',
            'password' => 'Password salah',
        ])->onlyInput('email', 'password');
    }

    public function login_register_post_register(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        if(!$credentials){
            return redirect()->route('home.index')->with('info', 'Anda gagal daftar ke sistem');
        }else{
            $customer = new User;
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->password = Hash::make($request->password);
            $customer->role = 'customer';
            $customer->save();

            return redirect()->route('home.login_register')->with('success', 'Anda berhasil daftar ke sistem');
        }
    }

    public function show($id)
    {
        $produk = Produk::where('id', $id)->with('produk')->get();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home.login_register');
    }
    public function about()
    {

        $cart = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id','produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->get();

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->get();

        $total = $item->sum('total_harga');

        return view('home.about',compact('cart', 'total'));
    }

    public function contact()
    {

        $cart = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id','produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->get();

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->get();

        $total = $item->sum('total_harga');

        return view('home.contact', compact('cart', 'total'));
    }

    public function login_register()
    {

        $cart = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id','produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->get();

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->get();

        $total = $item->sum('total_harga');

        return view('home.login_register', compact('cart', 'total'));
    }
}
