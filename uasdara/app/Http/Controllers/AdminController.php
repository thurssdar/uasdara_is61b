<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landingpage',compact());
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
        $this->validate($request,[
            'captcha' => 'required|captcha',
        ]);

        $total = Pendaftar::all()->count();
        $total = $total + 1;
        $test = str_pad("PPDB",10,"0");
        $kode = "$test$total";

        $pendaftar = new Pendaftar;
        $pendaftar->kode_daftar = $kode;
        $pendaftar->pakets_id = $request->paket;
        $pendaftar->tahun_ajarans_id = $request->ta;
        $pendaftar->jenis_daftar = $request->jenis;
        $pendaftar->nisn = $request->nisn;
        $pendaftar->nama = $request->nama;
        $pendaftar->nohp = $request->hp;
        $pendaftar->tempat_lahir = $request->tempat;
        $pendaftar->tanggal_lahir = $request->tanggal;
        $pendaftar->asal_sekolah = $request->sekolah;
        $pendaftar->password = Hash::make($request->password);
        $pendaftar->save();

        $ayah = new Dataayah;
        $ayah->pendaftars_id =$pendaftar->id;
        $ayah->save();

        $ibu = new Dataibu;
        $ibu->pendaftars_id =$pendaftar->id;
        $ibu->save();

        $wali = new Datawali;
        $wali->pendaftars_id =$pendaftar->id;
        $wali->save();


        return redirect('/login-pkbm');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


