@extends('layouts.main')

@section('content')
<div class="container">

    <div class="row g-5">
        
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Data Pemesanan Tiket</h4>
          <form class="needs-validation" action="" method="POST">
            @csrf
            <div class="row g-3">
              <div class="col-sm-12">
                <label for="firstName" class="form-label">Nama</label>
                <input type="text" class="form-control" id="firstName" placeholder="" readonly value="{{ auth()->user()->name }}" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
    
    
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" readonly value="{{auth()->user()->email}}" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
    
              <div class="col-12">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="address" required="">
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="address" required="">
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="col-4">
                  <label for="address" class="form-label">Jumlah Tiket</label>
                  <div class="input-group col-4">
                      <span class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                            <span class="">-</span>
                          </button>
                      </span>
                      <input type="text" readonly id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                      <span class="input-group-btn"> 
                          <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                              <span class="">+</span>
                          </button>
                      </span>
                  </div>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">Total</label>
                <input type="text" class="form-control" name="total" id="total" value="35000" required="">
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>
            </div>
    
    
            <hr class="my-4">
    
            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
          </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);
            total(parseInt($('#quantity').val()))
          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            total(parseInt($('#quantity').val()))
            }
    });

    function total(value){
        console.log(value)
        var tot = parseInt(value) * 35000;
        $('#total').val(tot)
    }
    
});
</script>

@if (session('token'))
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="SB-Mid-client-gFjgNCRVVEO1UZsX"></script>
<form action="{{ route('bayar.simpan') }}" method="post" id="form-bayar">
  @csrf
  <input type="hidden" name="id" value="{{ session()->get('id') }}">
  <input type="hidden" name="json" id="json">
</form>
<script>
   window.snap.pay('{{ session()->get("token") }}', {
      onSuccess: function(result){
        /* You may add your own implementation here */
        // alert("payment success!"); console.log(result);
        responses(result)
      },
      onPending: function(result){
        /* You may add your own implementation here */
        // alert("wating your payment!"); console.log(result);
        responses(result)
      },
      onError: function(result){
        /* You may add your own implementation here */
        // alert("payment failed!"); console.log(result);
        responses(result)
      },
      onClose: function(){
        /* You may add your own implementation here */
        alert('you closed the popup without finishing the payment');
      }
    })

    function responses(result){
      console.log(result)
      document.querySelector('#json').value = JSON.stringify(result);
      document.querySelector('#form-bayar').submit();
    }
</script>
@endif
@endsection