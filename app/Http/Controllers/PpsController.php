<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpsController extends Controller
{
    public function index()
    {
        return view('pps.index');
    }

    public function approve()
    {
        return redirect('/');
    }
}
