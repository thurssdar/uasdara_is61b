<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Jurusan;
use App\Models\MataKuliah;
use App\Models\Semester;
use App\Models\TahunAjar;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $mhs = Mahasiswa::all();
        return view('mahasiswa.index',compact('nomor','mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ta = TahunAjar::all();
        $sm = Semester::all();
        return view('mahasiswa.form',compact('ta','sm'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswa;
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->tempat = $request->tempat;
        $mhs->tanggal = $request->tanggal;
        $mhs->alamat = $request->alamat;
        $mhs->jk = $request->jk;
        $mhs->agama = $request->agama;
        $mhs->semesters_id = $request->semester;
        $mhs->tahunajars_id = $request->tahunajar;
        $mhs->foto = $request->foto->getClientOriginalName();
        $mhs->save();

        $request->foto->move('foto',$request->foto->getClientOriginalName());

        return redirect('/mahasiswa/');
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
        $mhs = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->tempat = $request->tempat;
        $mhs->tanggal = $request->tanggal;
        $mhs->alamat = $request->alamat;
        $mhs->jk = $request->jk;
        $mhs->agama = $request->agama;
        $mhs->semesters_id = $request->semester;
        $mhs->tahunajars_id = $request->tahunajar;
        $mhs->foto = $request->foto->getClientOriginalName();
        $mhs->save();

        $request->foto->move('foto',$request->foto->getClientOriginalName());

        return redirect('/mahasiswa/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        return redirect('/mahasiswa/');
    }
}
