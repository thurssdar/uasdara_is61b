<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $dsn = dosen::all();
        return view('admin.dosen.index',compact('nomor','dsn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mk = matakuliah::all();
        return view('admin.dosen.form',compact('mk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dsn = new dosen;
        $dsn->nip = $request->nip;
        $dsn->nama = $request->nama;
        $dsn->matakuliahs_id = $request->matakuliah;
        $dsn->save();

        return redirect('/dosen/');
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
        $dsn = dosen::find($id);
        return view('admin.dosen.edit',compact('dsn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dsn = Dosen::find($id);
        $dsn->nip = $request->nip;
        $dsn->nama = $request->nama;
        $dsn->matakuliahs_id = $request->matakuliah;
        $dsn->save();

        return redirect('/dosen/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dsn = Dosen::find($id);
        $dsn->delete();

        return redirect('/dosen/');
    }
}
