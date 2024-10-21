<?php

namespace App\Http\Controllers;

use App\Models\Absenreport;
use Illuminate\Http\Request;

class AbsenreportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model Absenreport
        $result = Absenreport::all();
        //dd($result); untuk menampilkan data db

        // kirim data $result ke view Absenreport/index.blade.php
        return view('absenreport.index')->with('absenreport', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absenreport.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input nama imput disamakan dengan tabel kolom
        $input = $request->validate([
           
            "pegawai_id"      =>"required",
            "Pin"             =>"required",
            "Nip"             =>"required",
            "Nama"            =>"required",
            "Jabatan"         =>"required",
            "Departemen"      =>"required",
            "Divisi"          =>"required",
            "Tanggal"         =>"required",
            "Bulan"           =>"required",
            "Hari"            =>"required",
            "Scan_awal"       =>"required",
            "Scan_akhir"      =>"required",
            "Status"          =>"required",
            "Jam_Kerja"       =>"required",

        ]);
        //simpan
        //Absenreport::create($input);

        //redirect beserta pesan sukses
        //return redirect()->route('absenreport.index')->with('success', $request->pembagian3_nama.' Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absenreport $absenreport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absenreport $absenreport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absenreport $absenreport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absenreport $absenreport)
    {
        //
    }
}
