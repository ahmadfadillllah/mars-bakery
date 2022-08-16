<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //

    public function index()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::with('produk')->get();
        return view('home.index', compact('kategori', 'produk'));
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
        dd($produk);
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
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function login_register()
    {
        return view('home.login_register');
    }
}
