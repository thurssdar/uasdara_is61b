<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $dsn = Dosen::all();
        return view('dosen.index',compact('nomor','dsn'));
    }

}
