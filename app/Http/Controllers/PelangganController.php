<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(pelanggan $pelanggan)
    {
        $data = pelanggan::all();
        return view('pelanggan.pelanggan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan = pelanggan::create([
            'nm_pel' => $request->nm_pel,
            'no_telp_pel' => $request->no_telp_pel,
            'almt_pel' => $request->almt_pel,
            'no_rek' => $request->no_rek,
        ]);
        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = pelanggan::find($id);

        return view('pelanggan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    
     public function ganti(request $request, $id)
    {
        $data = pelanggan::find($id)->update([
            'nm_pel' => $request->nm_pel,
            'no_telp_pel' => $request->no_telp_pel,
            'almt_pel' => $request->almt_pel,
            'no_rek' => $request->no_rek,
        ]);
        return redirect('/pelanggan');
    }

    public function update(Request $request, pelanggan $pelanggan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggan $pelanggan)
    {
        //
    }
}