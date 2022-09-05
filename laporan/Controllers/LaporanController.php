<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporanMingguan()
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
        
        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Selesai')->get()->count();

        return view('admin.laporan.laporan-mingguan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));
    }

    public function laporanBulanan()
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
        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Selesai')->get()->count();

        return view('admin.laporan.laporan-bulanan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));
    }

    public function laporanTahunan()
    {
        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '!=', 'Belum dipesan')->get();
        // dd($cart);
        
        $item = Cart::join('produk', 'cart.produk_id','produk.id')
        ->select(DB::raw('produk.hargaproduk * cart.quantity as total_harga'))
        ->get();

        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Selesai')->get()->count();

        $user = User::get();

        return view('admin.laporan.laporan-tahunan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));
    }


    public function laporanMingguaFilter(Request $request)
    {
        $start_date = $request->startdate;
        $end_date = $request->enddate;
        $status = $request->status;

        if ($status == null) {
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->whereBetween('cart.created_at',[$start_date,$end_date])->get();

        }   else if($start_date == null || $end_date == null ) {
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->where('status',$status)->get();

        }   else{
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->whereBetween('cart.created_at',[$start_date,$end_date])
            ->where('status',$status)->get();
        }

        $user = User::get();

         
        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Selesai')->get()->count();

        return view('admin.laporan.laporan-mingguan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));

    }

    public function filterChartMingguan(Request $request)
    {
        $start_date = $request->startdate;
        $end_date = $request->enddate;

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '!=', 'Belum dipesan')->get();
        // dd($cart);

        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereBetween('cart.created_at',[$start_date,$end_date])->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereBetween('cart.created_at',[$start_date,$end_date])->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereBetween('cart.created_at',[$start_date,$end_date])->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereBetween('cart.created_at',[$start_date,$end_date])->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereBetween('cart.created_at',[$start_date,$end_date])->where('status','Pesanan Selesai')->get()->count();

        $user = User::get();

        return view('admin.laporan.laporan-mingguan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));

    }

    public function laporanBulananFilter(Request $request)
    {
        $month = $request->month;
        $status = $request->status;

        if ($status == null) {
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->whereMonth('cart.created_at',$month)->get();

        }   else if($month == null) {
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->where('status',$status)->get();

        }   else{
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->whereMonth('cart.created_at',$month)
            ->where('status',$status)->get();
        }

        $user = User::get();
             
        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Selesai')->get()->count();

        return view('admin.laporan.laporan-bulanan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));

    }

    public function filterChartBulanan(Request $request)
    {
        $month = $request->month;

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '!=', 'Belum dipesan')->get();
        // dd($cart);

        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereMonth('cart.created_at',$month)->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereMonth('cart.created_at',$month)->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereMonth('cart.created_at',$month)->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereMonth('cart.created_at',$month)->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereMonth('cart.created_at',$month)->where('status','Pesanan Selesai')->get()->count();

        $user = User::get();

        return view('admin.laporan.laporan-bulanan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));

    }

    public function laporanTahunanFilter(Request $request)
    {
        $year = $request->year;
        $status = $request->status;

        if ($status == null) {
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->whereYear('cart.created_at',$year)->get();

        }   else if($year == null) {
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->where('status',$status)->get();

        }   else{
            $cart = Cart::join('users', 'cart.user_id','users.id')
            ->join('produk', 'cart.produk_id','produk.id')
            ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
            ->whereYear('cart.created_at',$year)
            ->where('status',$status)->get();
        }

        $user = User::get();
             
        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('status','Pesanan Selesai')->get()->count();

        return view('admin.laporan.laporan-tahunan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));

    }

    public function filterChartTahunan(Request $request)
    {
        $year = $request->year;

        $cart = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->where('cart.status', '!=', 'Belum dipesan')->get();
        // dd($cart);

        $belumDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereYear('cart.created_at',$year)->where('status','Belum Dipesan')->get()->count();

        $sudahDipesan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereYear('cart.created_at',$year)->where('status','Sudah Dipesan')->get()->count();

        $pesananDikonfirmasi = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereYear('cart.created_at',$year)->where('status','Pesanan Dikonfirmasi')->get()->count();

        $pesananDalamPerjalanan = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereYear('cart.created_at',$year)->where('status','Pesanan Dalam Perjalanan')->get()->count();

        $pesananSelesai = Cart::join('users', 'cart.user_id','users.id')
        ->join('produk', 'cart.produk_id','produk.id')
        ->select('cart.id', 'cart.user_id', 'cart.status' ,'produk.gambarproduk1', 'produk.namaproduk', 'produk.hargaproduk', 'cart.quantity')
        ->whereYear('cart.created_at',$year)->where('status','Pesanan Selesai')->get()->count();

        $user = User::get();

        return view('admin.laporan.laporan-tahunan',compact('cart','user','belumDipesan','sudahDipesan','pesananDikonfirmasi','pesananDalamPerjalanan','pesananSelesai'));

    }
}
