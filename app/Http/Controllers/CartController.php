<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function index(Request $request)
    {

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id','produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->get();

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->get();

        $total = $item->sum('total_harga');
        // dd($total);

        return view('home.cart', compact('cart', 'total'));
    }

    public function insert(Request $request)
    {
        $cart = new Cart;
        $cart->user_id = $request->user_id;
        $cart->produk_id = $request->produk_id;
        $cart->quantity = 1;
        $cart->save();

        if($cart){
            return redirect()->route('cart.index')->with('success', 'Berhasil masuk ke keranjang');
        }

        return redirect()->route('home.index')->with('info', 'Gagal masuk ke keranjang');
    }

    public function updatecart(Request $request)
    {
        try {
            foreach($request->id as $key=>$value){
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
