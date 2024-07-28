<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $mk = MataKuliah::all();
        return view('matakuliah.index',compact('nomor','mk'));
    }
}
