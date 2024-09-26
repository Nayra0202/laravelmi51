<?php

namespace App\Http\Controllers;

use App\Models\tabel_status;
use Illuminate\Http\Request;

class TabelStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model ststus
        $hasil=tabel_status::all();
        //cek isi variabel $hasil
        //dd($hasil);
        return view(view: 'status.index')->with(key: 'hasil',value:$hasil);
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
    public function show(tabel_status $tabel_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tabel_status $tabel_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tabel_status $tabel_status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tabel_status $tabel_status)
    {
        //
    }
}
