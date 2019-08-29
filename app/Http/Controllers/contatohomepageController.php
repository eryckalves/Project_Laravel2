<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatohomepageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function view()
    {
        return view('Homepage.contato');
    }
}
