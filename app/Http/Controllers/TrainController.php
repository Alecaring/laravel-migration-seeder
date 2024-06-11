<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        $datas = Train::all();
        // dd($data);
        return view('home', compact('datas'));
    }
}
