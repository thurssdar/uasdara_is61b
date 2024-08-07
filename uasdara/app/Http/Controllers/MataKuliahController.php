<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $mk = matakuliah::all();
        return view('admin.matakuliah.index',compact('nomor','mk'));
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.matakuliah.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mk = new matakuliah();
        $mk->kode = $request->kode;
        $mk->matakuliah = $request->matakuliah;
        $mk->sks = $request->sks;
        $mk->save();

        return redirect('/matakuliah/');
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
        $mk = matakuliah::find($id);
        return view('admin.matakuliah.edit',compact('mk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mk = matakuliah::find($id);
        $mk->matakuliah = $request->matakuliah;
        $mk->sks = $request->sks;
        $mk->save();

        return redirect('/matakuliah/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mk = MataKuliah::find($id);
        $mk->delete();

        return redirect('/matakuliah/');
    }
}
