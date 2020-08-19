<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use App\Exports\RegistersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

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

    public function reg(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi!',
            'numeric' => ':Attribute (Nomor Telp) harus berupa angka 0-9!',
            'email' => ':Attribute harus dengan format yang benar. Contoh : saya@gmail.com',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required|email',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Register::create($request->all());
        flash('Data berhasil dikirim!')->success();
        return redirect('/priapunyaselera');
    }

    public function genxls(Request $request)
    {
        return Excel::download(new RegistersExport, 'Data Registrasi Pria Punya Selera.xlsx');
    }
}
