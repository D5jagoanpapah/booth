@extends('frontend.layout')

@section('content')
    <div class="container mt-4">
        <form action="{{ route('booth.booking') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="booth_id" value="{{ $booth->id }}">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="card-body">
                    <div class="col-md-8">
                            <h2 class="fw-bold card-title">Sewa {{ $booth->name }}</h2>
                            <p><strong>Lokasi:</strong> {{ $booth->vendor->address->address . ', ' . $booth->vendor->address->district . ', ' . $booth->vendor->address->city->type . '. ' .  $booth->vendor->address->city->name . ', ' . $booth->vendor->address->province->name }}</p>
                            <p><strong>Stok Tersedia:</strong> {{ $booth->stok }}</p>
                            <p class="card-text fw-bold mb-2">Isi form sebagai syarat</p>
                        </div>
                        
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ auth()->user()->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ auth()->user()->email }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>
                                        <select class="form-select" name="address_id" id="address">
                                            <option value="" hidden>Pilih Alamat</option>
                                            @foreach (auth()->user()->addresses as $address)
                                            <option value="{{ $address->id }}">{{ $address->address . ', ' . $address->district . ', ' . $address->city->type . '. ' .  $address->city->name . ', ' . $address->province->name }}</option>
                                            @endforeach
                                        </select>
                                        <a href="" class="d-block mt-2 color-primary"><i class="bi bi-plus"></i> Tambah Alamat Baru</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Booking</th>
                                    <td>
                                        <input type="date" class="form-control" name="booking_date" value="{{ date('Y-m-d') }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Durasi Peminjaman</th>
                                    <td>
                                        <select class="form-select" name="duration" id="duration">
                                            @foreach (range(1,12) as $duration)
                                            <option value="{{ $duration }}">{{ $duration }} Bulan</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            
                            @if (auth()->user()->user_detail->ktp_is_verified == '0')
                                <p class="text-warning">
                                    <i class="bi bi-exclamation-triangle-fill"></i> KTP anda belum diverifikasi oleh admin, pastikan KTP sudah diupload pada halaman profil
                                </p>
                                <a href="" class="btn btn-success">Cek Profil</a>
                            @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><strong>Tanggal Mulai:</strong> 21 Agt 2025</p>
                    <p class="card-text"><strong>Sampai Tanggal:</strong> 21 Sep 2025</p>
                    <p class="card-text"><strong>Durasi Sewa:</strong> 1 Bulan</p>
                    <p class="card-text"><strong>Subtotal Harga:</strong> Rp 10.000</p>
                    <hr>
                    <h5 class="card-title">Harga Total:</h5>
                    <h4 class="color-primary fw-bold">Rp 10.000</h4>
                    <button class="btn btn-custom rounded-5 text-white w-100">Pesan Tempat</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

@stop