<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paintings = Painting::get();
        $paintings = Painting::Paginate(12);
        return view('Paintings.main',compact('paintings'));
    }

    public function applogin(Request $request){


    }
}
