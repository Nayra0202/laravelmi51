<?php

namespace App\Http\Controllers;

use App\Models\tabel_service;
use Illuminate\Http\Request;

class TabelServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model ststus
        $hasil=tabel_service::all();
        //cek isi variabel $hasil
        //dd($hasil);
        return view(view: 'tabel_service.index')->with(key: 'hasil',value:$hasil);
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
    public function show(tabel_service $tabel_service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tabel_service $tabel_service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tabel_service $tabel_service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tabel_service $tabel_service)
    {
        //
    }
}
