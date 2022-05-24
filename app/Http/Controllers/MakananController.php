<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(makanan $makanan)
    {
        $data = makanan::all();
        return view('makanan.makanan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makanan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makanan = makanan::create([
            'nama_mknn' => $request->nama_mknn,
            'hrg_mknn' => $request->hrg_mknn,
            'gambar_mknn' => $request->gambar_mknn,
        ]);
        return redirect('/makanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = makanan::find($id);
        return view('makanan.edit', compact('data'));
    }

    public function ganti(request $request, $id)
    {
        $data = makanan::create([
            'nama_mknn' => $request->nama_mknn,
            'hrg_mknn' => $request->hrg_mknn,
            'gambar_mknn' => $request->gambar_mknn,
        ]);
        return redirect('/makanan');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, makanan $makanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(makanan $makanan)
    {
        //
    }
}
