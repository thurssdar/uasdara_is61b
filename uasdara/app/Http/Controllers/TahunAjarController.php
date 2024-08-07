<?php

namespace App\Http\Controllers;

use App\Models\TahunAjar;
use Illuminate\Http\Request;

class TahunAjarController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $ta = tahunajar::all();
        return view('admin.tahunajar.index',compact('nomor','ta'));
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tahunajar.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ta = new tahunajar();
        $ta->kode = $request->kode;
        $ta->tahunajar =$request->tahunajar;
        $ta->save();

        return redirect('/tahunajar/');
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
        ///
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ta = tahunajar::find($id);
        $ta->tahunajar = $request->tahunajar;
        $ta->save();

        return redirect('/tahunajar/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ta = tahunajar::find($id);
        $ta->delete();

        return redirect('/tahunajar/');
    }
}
