@extends('layouts.main')

@section('content')
<div class="container p-5">
    
  
    <div class="card" style="border: 1px solid">
        <div class="card-body mx-4">
          <div class="container">
            <p class="my-5 mx-0" style="font-size: 30px;">Tiket pesanan Anda</p>
            <div class="row">
              <ul class="list-unstyled">
                <li class="text-black">Nama : {{auth()->user()->name}}</li>
                <li class="text-muted mt-1"><span class="text-black">Email :  {{auth()->user()->email}}</span></li>
                <li class="text-black mt-1">Tanggal Pemesanan Tiket</li>
                <li class="text-black mt-1">Kode Pemesanan</li>
              </ul>
              <hr>
              <div class="col-xl-10">
                <p>Pro Package</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">$199.00
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>Consulting</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">$100.00
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>Support</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end">$10.00
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black">
    
              <div class="col-xl-12">
                <p class="float-end fw-bold">Total: $10.00
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