<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sobrehomepageController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function view()
    {
        $teste=1;
        return view('Homepage.sobre',compact('teste'));
    }
}
