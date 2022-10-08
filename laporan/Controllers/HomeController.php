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

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        $item = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

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
            'email' => ['required', 'email', 'unique:email'],
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

        return redirect()->route('home.index')->with('success', 'Anda telah logout');
    }
    public function about()
    {
        if(Auth::user()){
            return redirect()->route('customer.about');
        }else{
            return view('home.about');
        }
    }

    public function contact()
    {

        if(Auth::user()){
            return redirect()->route('customer.contact');
        }else{
            return view('home.contact');
        }
    }

    public function login_register()
    {

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '=', 'Belum dipesan')->get();

        $item = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->where('cart.status', '=', 'Belum dipesan')->get();

        $total = $item->sum('total_harga');

        return view('home.login_register', compact('cart', 'total'));
    }


    public function pemesananList()
    {
        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '!=', 'Belum dipesan')->get();
        // dd($cart);

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->get();

        $user = User::get();
        $total = $item->sum('total_harga');

        return view('admin.pemesanan',compact('cart','total','user'));
    }


}
