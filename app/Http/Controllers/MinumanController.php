<?php

namespace App\Http\Controllers;

use App\Models\minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(minuman $minuman)
    {
        $data = minuman::all();
        return view('minuman.minuman', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('minuman.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $minuman = minuman::create([
            'nama_mnmn' => $request->nama_mnmn,
            'hrg_mnmn' => $request->hrg_mnmn,
            'gambar_mnmn' => $request->gambar_mnmn,
        ]);
        return redirect('/minuman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\minuman  $minuman
     * @return \Illuminate\Http\Response
     */
    public function show(minuman $minuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\minuman  $minuman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = minuman::find($id);
        return view('minuman.edit', compact('data'));
    }

    public function ganti(request $request, $id)
    {
        $data = minuman::create([
            'nama_mnmn' => $request->nama_mnmn,
            'hrg_mnmn' => $request->hrg_mnmn,
            'gambar_mnmn' => $request->gambar_mnmn,
        ]);
        return redirect('/minuman');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\minuman  $minuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, minuman $minuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\minuman  $minuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(minuman $minuman)
    {
        //
    }
}
