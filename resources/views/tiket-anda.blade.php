@extends('layouts.main')

@section('content')
<div class="container p-5">
    
  
    <div class="card" style="border: 1px solid">
        <div class="card-body mx-4">
          <div class="container">
            <p class="my-5 mx-0" style="font-size: 30px;">Tiket pesanan Anda</p>
            <div class="row">
              <div class="col-8">
                <ul class="list-unstyled">
                  <li class="text-black">Nama : {{auth()->user()->name}}</li>
                  <li class="text-muted mt-1"><span class="text-black">Email :  {{auth()->user()->email}}</span></li>
                  <li class="text-black mt-1">Tanggal Pemesanan Tiket <br> {{ Carbon\Carbon::parse($pesanan->tanggal)->format('d M Y') }}</li>
                  <li class="text-black mt-1">Kode Pemesanan <br> {{ $pesanan->order_id }}</li>
                </ul>
              </div>
              <div class="col-4 d-flex justify-content-end mb-2" style="margin-top: -9rem; margin-left: -1rem;">
                <div>
                  @php
                      $link = url('tiket/'.$pesanan->order_id.'/datang')
                  @endphp
                  {!! DNS2D::getBarcodeHTML("$link", 'QRCODE') !!}
                </div>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>Jumlah Tiket</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{ $pesanan->jumlah }} Tiket
                </p>
              </div>
              <hr>
              <div class="col-xl-10">
                <p>Subtotal</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">{{ number_format($pesanan->total) }}
                </p>
              </div>
              <hr>
            </div>
            <div class="row text-black">
    
              <div class="col-xl-12">
                <p class="float-end fw-bold">Total: Rp{{ number_format($pesanan->total) }}
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class = "btn btn-primary" d-flex="jutify" onclick="window.print()">Print</button>
@endsection