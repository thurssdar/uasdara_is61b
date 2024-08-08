<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\Penjadwalan;
use App\Models\Semester;
use App\Models\TahunAjar;

class PenjadwalanController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pj    = penjadwalan::all();
        return view('penjadwalan.index',compact('nomor','pj'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ta  = TahunAjar::all();
        $sm  = Semester::all();
        $ds  = Dosen::all();
        $mhs = Mahasiswa::all();
        $mk  = MataKuliah::all();

        return view('penjadwalan.form',compact('ta','sm','mk','ds','mhs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $pj = new penjadwalan;
        $pj->kode = $request->kode;
        $pj->mahasiswas_id = $request->mahasiswa;
        $pj->hari = $request->hari;
        $pj->tanggal = $request->tanggal;
        $pj->matakuliahs_id = $request->matakuliah;
        $pj->dosens_id = $request->dosen;
        $pj->semesters_id = $request->semester;
        $pj->tahunajars_id = $request->tahunajar;
        $pj->save();


        return redirect('/penjadwalan/');
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
        $pj = Penjadwalan::find($id);
        return view('penjadwalan.edit',compact('pj'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pj = Penjadwalan::find($id);
        $pj->kode = $request->kode;
        $pj->mahasiswas_id = $request->nim;
        $pj->mahasiswas_id = $request->nama;
        $pj->hari = $request->hari;
        $pj->tanggal = $request->tanggal;
        $pj->matakuliahs_id = $request->matakuliah;
        $pj->matakuliahs_id = $request->sks;
        $pj->dosens_id = $request->nip;
        $pj->dosens_id = $request->nama;
        $pj->semesters_id = $request->semester;
        $pj->tahunajars_id = $request->tahunajar;
        $pj->save();

        return redirect('/penjadwalan/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pj = Penjadwalan::find($id);
        $pj->delete();

        return redirect('/penjadwalan/');
    }


}
