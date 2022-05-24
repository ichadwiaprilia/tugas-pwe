<?php

namespace App\Http\Controllers;

use App\Models\kategoriproduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(kategoriproduk $kategoriproduk)
    {
        $data = kategoriproduk::all();
        return view('kategori_produk.kategoriproduk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategoriproduk = kategoriproduk::create([
            'nama_kat' => $request->nama_kat,
            'jumlah_produk' => $request->jumlah_produk,
        ]);
        return redirect('/kategoriproduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategoriproduk  $kategoriproduk
     * @return \Illuminate\Http\Response
     */
    public function show(kategoriproduk $kategoriproduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategoriproduk  $kategoriproduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = kategoriproduk::find($id);
        return view('kategori_produk.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategoriproduk  $kategoriproduk
     * @return \Illuminate\Http\Response
     */
    
    public function ganti(request $request, $id)
    {
        $data = kategoriproduk::find($id)->update([
            'nama_kat' => $request->nama_kat,
            'jumlah_produk' => $request->jumlah_produk,
        ]);
        return redirect('/kategoriproduk');
    }

     public function update(Request $request, kategoriproduk $kategoriproduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategoriproduk  $kategoriproduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategoriproduk $kategoriproduk)
    {
        //
    }
}
