<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class V_artgallery extends Controller
{
    public function index()
    {
        return view('V_art');
    }
}
