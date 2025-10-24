<?php

namespace App\Http\Controllers;

use App\Models\DataKonsumen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $datakonsumen = DataKonsumen::orderBy("Tanggal")->get();

        return view('home.index',[
            "konsumen"=>$datakonsumen
        ]);
    }
}