@extends('frontend.layout')

@section('content')
<div class="container">


<div class="row justify-content-center">

    <div class="col-md-6 col-lg-4">
        <div class="card-body">
            <div class="card rounded-4">
              <div class="card-body">
                <h3 class="text-center fw-bold mb-4">BRO<span class="color-primary">BOOTH</span>.</h3>

                <div class="d-flex justify-content-between">
                    <p class="text-muted mb-0">{{ $booking->created_at->format('d M Y') }} · {{ $booking->created_at->format('H:i') }}</p>
                    <p class="text-muted mb-0">ORDER ID {{ $booking->payment->order_id }}</p>
                </div>

                <hr class="dotted">
                
                @if ($payment->status == 'pending')
                    <p class="mb-2 text-warning"><i class="bi bi-clock-fill"></i> Menunggu Pembayaran!</p>
                @elseif ($payment->status == 'paid')
                <p class="mb-2 text-success"><i class="bi bi-check-circle-fill"></i> Pembayaran Berhasil!</p>
                @elseif ($payment->status == 'failed')
                <p class="mb-2 text-danger"><i class="bi bi-x-circle-fill"></i> Pembayaran Gagal!</p>
                @endif
                
                <small>Pembayaran sewa booth ke vendor <span class="fw-bold">{{ $booking->booth->vendor->company_name }}</span></small>
                
                <table class="table w-100 mt-4 mb-4">
                    <tr>
                        <td class="small fw-bold text-nowrap">Booth</td>
                        <td class="small text-end">{{ $booking->booth->name }}<br>({{ $booking->booth->size }})</td>
                    </tr>
                    <tr>
                        <td class="small fw-bold text-nowrap">Tanggal</td>
                        <td class="small text-end">{{ date('d M Y', strtotime($booking->booking_date)) }}</td>
                    </tr>
                    <tr>
                        <td class="small fw-bold text-nowrap">Durasi</td>
                        <td class="small text-end">{{ $booking->duration }} Bulan</td>
                    </tr>
                    <tr>
                        <td class="small fw-bold text-nowrap">Pengiriman</td>
                        <td class="small text-end">{{ $booking->address->address . ', ' . $booking->address->district . ', ' . $booking->address->city->type . '. ' .  $booking->address->city->name . ', ' . $booking->address->province->name }}</td>
                    </tr>
                </table>
                                
                <h6 class="fw-bold text-end">Total : Rp{{ number_format($payment->amount, '0', '.', '.')}}</h6>

                <button class="btn btn-custom rounded-pill w-100 mt-4" id="pay-button">Bayar</button>
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