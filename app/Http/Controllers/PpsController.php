<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('approved')) {
            return view('pps.approved');
        } else {
            return view('pps.index');
        }
    }

    public function agevalidate(Request $request)
    {
        $request->session()->forget('approved');
        $request->session()->flush();

        session(['approved' => 'ok']);
        return redirect('/priapunyaselera');
    }

    public function genxls(Request $request)
    {
        //Todo
    }
}
