<?php

namespace App\Http\Controllers;

use App\Models\teknisi;
use Illuminate\Http\Request;

class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model ststus
        $hasil=teknisi::all();
        //cek isi variabel $hasil
        //dd($hasil);
        return view(view: 'teknisi.index')->with(key: 'hasil',value:$hasil);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(teknisi $teknisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teknisi $teknisi)
    {
        //panggil model Riwayat
        $hasil=teknisi::all();
        //cek isi variable $hasil
        //dd($hasil);
        return view(view: 'teknisi.index')->with(key: 'hasil',value:$hasil);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teknisi $teknisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teknisi $teknisi)
    {
        //
    }
}
