@extends('layouts.pps_layout')
@section('content')
<div class="py-5 bg-image-full" style="background-image: url('{{ asset('template/header.png') }}');">
    <div style="height: 300px;"></div>
</div>

<div class="readLine"></div>

<!-- Trigger/Open The Modal -->
{{-- <button id="myBtn">Open Modal</button> --}}

<!-- The Modal -->
<div id="myModal" class="modal centerPage">

    <!-- Modal content -->
    <div class="modal-content">
        {{-- <span class="close" style="text-align: right;">&times;</span> --}}
        <p>SISTUS INI MEMILIKII INFORMASI MENGENAI PRODUK</p>
        <p>YANG MENGANDUNG TEMBAKAU DAN HANYA</p>
        <p>DIPERUNTUKAN BAGI PEROKOK BERUSIA +18</p>
        <p><b>VERIFIKASI UMUR ANDA</b></p>
        <form action="{{ route('agevalidate') }}" method="POST" id="validateForm">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <select name="month" id="month" class="form-control">
                        <option value="0">- Pilih Bulan -</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select name="year" id="year" class="form-control">
                        <option value="0">- Pilih Tahun -</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1960">1960</option>
                    </select>
                </div>
            </div>
        </form>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <button type="button" id="btnSubmit" name="btnSubmit" class="btn btn-danger"
                    style="width: 150px;">Submit</button>
            </div>
        </div>
    </div>

</div>
@endsection
