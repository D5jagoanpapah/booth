@extends('frontend.layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Gambar Produk -->
            <div class="col-12">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/frontend/images/carousel/carousel1.png" class="d-block w-100 rounded-4" alt="Promo 1">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/frontend/images/carousel/carousel2.png" class="d-block w-100 rounded-4" alt="Promo 1">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/frontend/images/carousel/carousel3.png" class="d-block w-100 rounded-4" alt="Promo 1">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Judul -->
        <div class="row mt-4">
            <div class="col-md-8">
                <h1 class="fw-bold">{{ $booth->name }}</h1>
                <p><strong>Lokasi:</strong> {{ $booth->vendor->address->address . ', ' . $booth->vendor->address->district . ', ' . $booth->vendor->address->city->type . '. ' .  $booth->vendor->address->city->name . ', ' . $booth->vendor->address->province->name }}</p>
                <!-- Deskripsi -->
                <div class="divider mt-5">
                    <h4 class="fw-bold">Deskripsi</h4>
                </div>
                <p>{{ nl2br($booth->name) }}</p>
                <div class="divider mt-5">
                    <h4 class="fw-bold">Foto</h4>
                </div>
                <div class="row">
                    @foreach ($booth->images as $image)
                    <div class="col-lg-4">
                        <img src="{{ Storage::url($image->image_url) }}" class="w-100 shadow rounded">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <!-- Harga Sewa -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-bold text-center">Harga Sewa</h3>
                        <p class="card-text text-center">Rp{{ number_format($booth->price, '0','.','.') }}/Bulan</p>
                        <a href="{{ route('view.payment', $booth->id) }}" class="btn btn-custom text-white rounded-5 w-100" >Pesan Booth</a>
                        <div class="mb-3 mt-4">
                            <p class="card-text text-center">Punya pertanyaan? Mau negosiasi harga?</p>
                            <a href="https://wa.me/{{ $booth->vendor->address->phone_number }}" target="_blank" class="btn btn-success text-white rounded-5 w-100"><i class="bi bi-whatsapp"></i> Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <!-- Maps -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h3 class="card-title fw-bold text-center">Lokasi</h3>
                        <div id="map-container" style="height: 300px;">
                            {!! $booth->vendor->address->gmaps !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @stop