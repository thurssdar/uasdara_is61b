<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjadwalan;

class PenjadwalanController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pj    = Penjadwalan::all();
        return view('penjadwalan.index',compact('nomor','pj'));
    }

   
}
