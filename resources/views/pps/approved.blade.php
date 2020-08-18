@extends('layouts.pps_layout')
@section('content')
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

<div class="col-md-6 offset-5">
    <a href="http://www.tokopedia.com" class="btn btn-danger">Produk Selengkapnya Disini</a>
</div>

<div class="readLine"></div>


@endsection
