@extends('layouts.pps_layout')
@section('content')

<style>
    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        font-weight: bold;
    }
</style>

<div class="py-5 bg-image-full" style="background-image: url('{{ asset('template/header.png') }}');">
    <div style="height: 300px;"></div>
</div>

<div class="readLine"></div>

<div class="col-md-6 offset-md-4">
    <img src="{{ asset('template/msg.png') }}" width="500" alt="" srcset="">
</div>

<div class="readLine"></div>

<div class="col-md-12 itemDesc">
    <p>BUNDLE 2 PACK GUDANG GARAM INTERNATIONAL</p>
    <p>FILTER WITH SPEAKER BLUETOOTH</p>
</div>

<section class="regular slider">
    <div>
        <img src="{{ asset('template/product_item.png') }}">
    </div>
    <div>
        <img src="{{ asset('template/product_item.png') }}">
    </div>
    <div>
        <img src="{{ asset('template/product_item.png') }}">
    </div>
    <div>
        <img src="{{ asset('template/product_item.png') }}">
    </div>
    <div>
        <img src="{{ asset('template/product_item.png') }}">
    </div>
    <div>
        <img src="{{ asset('template/product_item.png') }}">
    </div>
</section>

<div class="col-md-12 centerText">
    <a href="http://www.tokopedia.com" class="btn btn-danger">Produk Selengkapnya Disini</a>
</div>

<div class="readLine"></div>

<form id="registerForm" action="{{ route('reg') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="form-group row">
                <div class="col-sm-12 offset-md-4">
                    <p><span class="fLblRed">DAFTAR SEKARANG</span> <span class="fLbl">untuk <br> mendapatkan info
                            produk terbaru dari <br>PRIA PUNYA
                            SELERA Official
                            Store</span></p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label fLbl">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control customForm" id="name" name="name" autocomplete="off"
                        required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label fLbl">Nomor Telepon</label>
                <div class="col-sm-5">
                    <input type="telp" class="form-control customForm" id="contact" name="contact" autocomplete="off"
                        required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label fLbl">E-mail</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control customForm" id="email" name="email" autocomplete="off"
                        required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label"></label>
                <div class="col-sm-5 fLbl">
                    <img src="{{ asset('template/btn.jpg') }}" width="150px" alt="" srcset="" id="submitBtn">
                </div>
            </div>
        </div>
    </div>
</form>

<div class="space20"></div>

<div class="col-md-12 centerText">
    <span class="fLbl">
        www.intersport.id | copyright 2020
    </span>
</div>
@endsection