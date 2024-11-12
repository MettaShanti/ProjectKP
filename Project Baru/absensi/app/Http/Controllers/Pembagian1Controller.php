<?php

namespace App\Http\Controllers;

use App\Models\Pembagian1;
use Illuminate\Http\Request;

class Pembagian1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model Pembagian1
        $result = Pembagian1::all();
        //dd($result); untuk menampilkan data db

        // kirim data $result ke view Pembagian1/index.blade.php
        return view('pembagian1.index')->with('pembagian1', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembagian1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input nama imput disamakan dengan tabel kolom
        $input = $request->validate([
           
            "pembagian1_id"       =>"required",
            "pembagian1_nama"     =>"required",
            "pembagian1_ket"      =>"required",

        ]);
        //simpan
        Pembagian1::create($input);

        //redirect beserta pesan sukses
        return redirect()->route('pembagian1.index')->with('success', $request->pembagian1_nama.' Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembagian1 $pembagian1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembagian1 $pembagian1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembagian1 $pembagian1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembagian1 $pembagian1)
    {
        //
    }
}
