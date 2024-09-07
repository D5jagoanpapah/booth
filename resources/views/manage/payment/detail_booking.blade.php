@extends('manage.layout')

@section('content')

<div class="card mb-2">
    <div class="card-header">
        <h4>Detail Booking</h4>
        <a href="/payment" class="btn btn-primary mb-4">Kembali</a>

    </div>
</div>

<div class="card">

    <div class="card-body">
        <div class="card mb-4">
            <li class="list-group-item fw-bold">Nama Pembeli :  {{ $payment->booking->user->name }} </li>
            <li class="list-group-item fw-bold">Nama Booth : {{ $payment->booking->booth->name }} </li>
            <li class="list-group-item fw-bold">Alamat : {{ $payment->booking->booth->address }} </li>
            <li class="list-group-item fw-bold">Tangggal Booking : {{ $booking->booking_date }} </li>
            <li class="list-group-item fw-bold">Durasi : {{ $booking->duration }} Bulan </li>
            <li class="list-group-item fw-bold">Status : {{ $payment->status }} </li>
          </div>
    </div>
</div>


@stop