<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index()
    {
        $kategori = KategoriProduk::all();

        return view('admin.dashboard.kategori.index', compact('kategori'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'namakategori' => ['required'],
            'deskripsikategori' => ['required'],
            'gambarkategori' => ['required', 'mimes:png,jpg,jpeg'],
        ],
        [
            'namakategori.required' => 'nama Kategori harus diisi',
            'deskripsikategori.required' => 'nama Kategori harus diisi',
            'gambarkategori.required' => 'nama Kategori harus diisi',
            'gambarkategori.mimes' => 'Format gambar harus png, jpg atau jpeg',
        ]);

        $date = date('Ymd His gis');
        $kategori = new KategoriProduk;
        $kategori->namakategori = $request->namakategori;
        $kategori->deskripsikategori = $request->deskripsikategori;

        if($request->hasFile('gambarkategori')){
            $request->file('gambarkategori')->move('admin/assets/img/others/', $date.$request->file('gambarkategori')->getClientOriginalName());
            $kategori->gambarkategori = $date.$request->file('gambarkategori')->getClientOriginalName();
            $kategori->save();

            return redirect()->back()->with('success', 'Kategori produk telah ditambahkan');
        }

        return redirect()->back()->with('info', 'Kategori produk gagal ditambahkan');
    }

    public function edit($id)
    {
        KategoriProduk::find($id);
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriProduk::find($id);
        $kategori->namakategori = $request->namakategori;
        $kategori->deskripsikategori = $request->deskripsikategori;

        $date = date('Ymd His gis');

        if($request->hasFile('gambarkategori')){
            $request->file('gambarkategori')->move('admin/assets/img/others/', $date.$request->file('gambarkategori')->getClientOriginalName());
            $kategori->gambarkategori = $date.$request->file('gambarkategori')->getClientOriginalName();
            $kategori->save();

            return redirect()->back()->with('success', 'Gambar Kategori telah diubah');
        }

        return redirect()->back()->with('info', 'Gambar Kategori gagal diubah');

    }

    public function delete($id)
    {
        $kategori = KategoriProduk::find($id)->delete();

        if($kategori){
            return redirect()->route('kategori.index')->with('success', 'Kategori produk telah dihapus');
        }

        return redirect()->route('kategori.index')->with('info', 'Kategori produk gagal dihapus');
    }



}
