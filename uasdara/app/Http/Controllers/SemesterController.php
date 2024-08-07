<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;
class SemesterController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $sm = semester::all();
        return view('admin.semester.index',compact('nomor','sm'));
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.semester.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sm = new semester();
        $sm->kode = $request->kode;
        $sm->semester =$request->semester;
        $sm->save();

        return redirect('/semester/');
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
        $sm = semester::find($id);
        $sm->semester = $request->semester;
        $sm->save();

        return redirect('/semester/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sm = semester::find($id);
        $sm->delete();

        return redirect('/semester/');
    }
}
