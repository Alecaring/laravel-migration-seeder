<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        // Recupera tutti i treni
        $datas = Train::all();

        // Debug: Dump and Die per verificare i dati

        // Passa i treni alla vista
        return view('home', compact('datas'));
    }
}
