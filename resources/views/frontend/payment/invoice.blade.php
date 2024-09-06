@extends('frontend.layout')

@section('content')
<div class="container">


<div class="row mt-1 justify-content-center">

    <div class="col-md-6 col-lg-4">
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h1 class="fw-bold text-center">INVOICE</h1>
                </div>
              <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5 class="card-title fw-bold">Booth : </h5> {{ $booking->booth->name }}</h5></li>
                <li class="list-group-item"><h5 class="card-title fw-bold">Size  : </h5> {{ $booking->booth->size }}</li>
                <li class="list-group-item"><h5 class="card-title fw-bold">Booking id :</h5> {{ $payment->booking_id }}</li>
                <li class="list-group-item"><h5 class="card-title fw-bold">Order ID :</h5>{{ $payment->order_id }}</li>
                <li class="list-group-item"><h5 class="card-title fw-bold">Tanggal Booking :</h5> {{ $payment->payment_date }}</li>
                <li class="list-group-item"><h5 class="card-title fw-bold">Status : {{ $payment->status }}</h5></li>
                <li class="list-group-item">
                <h5 class="text-end fw-bold">Total : Rp{{ number_format($payment->amount, '0', '.', '.')}}</h5>
            </li>   
            <button class="btn btn-custom"  id="pay-button">Bayar</button>
            </div>
            </div>
          </div>
        </div>
    </div>  
</div>





@stop

@push('script')
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $payment->snap_token }}', {
            onSuccess: function(result) {
                $.ajax({    
                    url: "{{ route('payment.finish') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        payment_id: "{{ $payment->id }}"
                    },
                    success: (response) => {
                        location.reload();
                    }
                })
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                alert("wating your payment!");
                console.log(result);
            },
            onError: function(result) {
                /* You may add your own implementation here */
                alert("payment failed!");
                console.log(result);
            },
            onClose: function() {
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
        })
    });
</script>
@endpush