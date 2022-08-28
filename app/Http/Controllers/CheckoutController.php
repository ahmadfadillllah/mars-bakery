<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    //

    public function index()
    {


        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id','produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.user_id', '=', Auth::user()->id)->get();

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->where('cart.user_id', '=', Auth::user()->id)->get();

        $total = $item->sum('total_harga');
        // dd($total);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-5aQABsAA0KihdYoBHSk1kgPy';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $total,
            ),
            // 'item_details' => array(
            //     'id' => rand(),
            //     'price' => $cart->hargaproduk,
            //     'quantity' => $cart->quantity,
            //     'name' => $cart->namaproduk,
            // ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->nohp,
            ),
        );

        $token = \Midtrans\Snap::getSnapToken($params);


        return view('home.checkout', compact('cart', 'total', 'token'));
    }

    public function update(Request $request)
    {
        $customer = User::where('id', Auth::user()->id)->update(
            [
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'notes' => $request->notes
            ]);

        if($customer){
            return redirect()->back()->with('success', 'Info telah diupdate');
        }
    }

    public function proses(Request $request)
    {
        try {
            foreach($request->id as $key=>$value){
                $cart = Cart::find($request->id[$key]);
                $cart->status = 'Sudah dipesan';
                $cart->save();
            }
            return redirect()->route('cart.index')->with('success', 'Pembayaran Berhasil');
        } catch (\Throwable $th) {
            return redirect()->route('cart.index')->with(['info' => $th->getMessage()]);
        }
    }

    public function pesanan()
    {
        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '!=', 'Belum dipesan')->where('cart.user_id', '=', Auth::user()->id)->get();

        if($cart->isEmpty()){
            return redirect()->back()->with('info', 'Belum ada pesanan');
        }

        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->where('cart.user_id', '=', Auth::user()->id)->get();

        $total = $item->sum('total_harga');

        return view('home.pesanan', compact('cart', 'item', 'total'));
    }
}
