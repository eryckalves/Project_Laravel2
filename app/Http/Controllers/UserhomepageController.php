<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserhomepageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('Homepage.index');
    }
}
