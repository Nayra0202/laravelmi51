<?php

namespace App\Http\Controllers;

use App\Models\tabel_riwayat;
use Illuminate\Http\Request;

class TabelRiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model ststus
        $hasil=tabel_riwayat::all();
        //cek isi variabel $hasil
        //dd($hasil);
        return view(view: 'tabel_riwayat.index')->with(key: 'hasil',value:$hasil);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //panggil model Riwayat
        $hasil=tabel_Riwayat::all();
        //cek isi variable $hasil
        //dd($hasil);
        return view(view: 'tabel_Riwayat.index')->with(key: 'hasil',value:$hasil);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tabel_riwayat $tabel_riwayat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tabel_riwayat $tabel_riwayat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tabel_riwayat $tabel_riwayat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tabel_riwayat $tabel_riwayat)
    {
        //
    }
}
