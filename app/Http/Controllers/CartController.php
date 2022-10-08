<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();


        if($cart->isEmpty()){
            return redirect()->route('cart.index')->with('info', 'Keranjang Masih Kosong');
        }

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->where('cart.status', '=', 'Belum Dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        $total = $item->sum('total_harga');
        // dd($total);

        return view('home.cart', compact('cart', 'total'));
    }

    public function insert(Request $request)
    {
        $prod = Cart::where('produk_id',$request->produk_id)->where('status','Belum Dipesan')->where('user_id',$request->user_id)->get()->count();
        if($prod == 1){
            return redirect()->route('home.index')->with('info', 'Barang sudah ada dikeranjang');
        }else if ($prod == 0){
            $cart = new Cart;
            $cart->user_id = $request->user_id;
            $cart->produk_id = $request->produk_id;
            $cart->quantity = 1;
            $cart->status = 'Belum Dipesan';
            $cart->save();
        }


        if($cart){
            return redirect()->route('cart.index')->with('success', 'Berhasil masuk ke keranjang');
        }

        return redirect()->route('home.index')->with('info', 'Gagal masuk ke keranjang');
    }

    public function updatecart(Request $request)
    {
        try {
            foreach($request->id as $key=>$value){
                $produk = Cart::find($request->produk_id[$key]);
                if($request->quantity[$key] > $produk->stokproduk){
                    return redirect()->route('cart.index')->with('info', 'Barang melebihi stok');
                }
                $cart = Cart::find($request->id[$key]);
                $cart->quantity = $request->quantity[$key];
                $cart->save();
            }
            return redirect()->route('cart.index')->with('success', 'Berhasil update keranjang');
        } catch (\Throwable $th) {
            return redirect()->route('cart.index')->with(['info' => $th->getMessage()]);
        }
    }

    public function deletecart($id)
    {
        $cart = Cart::find($id)->delete();

        if($cart){
            return redirect()->route('cart.index')->with('success', 'Produk telah dihapus dari keranjang');
        }

        return redirect()->route('cart.index')->with('info', 'Produk gagal dihapus dari keranjang');
    }
}
