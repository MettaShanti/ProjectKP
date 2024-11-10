<?php

namespace App\Http\Controllers;

use App\Models\Attlog;
use Illuminate\Http\Request;

class AttlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil model attlog
        $result = Attlog::all();
        //dd($result); untuk menampilkan data db

        // kirim data $result ke view attlog/index.blade.php
        return view('absensi.index')->with('attlog', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('absensi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input nama imput disamakan dengan tabel kolom
        $input = $request->validate([
            "sn"          =>"required",
            "scan_date"   =>"required",
            "pin"         =>"required",
            "verifymode"  =>"required",
            "inoutmode"   =>"required",
            "reserved"    =>"required",
            "work_code"   =>"required",
            "att_id"      =>"required"
        ]);
        //simpan
        Attlog::create($input);

        //redirect beserta pesan sukses
        return redirect()->route('attlog.index')->with('success', ' Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attlog $attlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attlog $attlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attlog $attlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attlog $attlog)
    {
        //
    }
}
