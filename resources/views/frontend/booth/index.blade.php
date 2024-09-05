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
                <h1 class="fw-bold">Sewa Booth Teh Solo Jaksel</h1>
                <p><strong>Lokasi:</strong> Kalibata, Pancoran, Kota Jakarta Selatan, DKI Jakarta</p>
                <!-- Deskripsi -->
                <div class="divider mt-5">
                    <h4 class="fw-bold">Deskripsi</h4>
                </div>
                <p>Sewa tempat usaha di area kios Kalibata City. Lokasi: Tower Eboni Ct09, (Depan kios Cozy Property)</p>
                <!-- Detail Properti -->
                <div class="divider">
                    <h4 class="fw-bold">Detail</h4>
                </div>
                <h3 class="fw-bold mb-3">Detail Produk</h3>
                <table class="table">
                    <tr>
                        <th>Tipe Properti</th>
                        <td>Booth</td>
                    </tr>
                    <tr>
                        <th>Nama Booth</th>
                        <td>Ebony</td>
                    </tr>
                    <tr>
                        <th>Lokasi</th>
                        <td>Depan Kios Cozy Property</td>
                    </tr>
                    <tr>
                        <th>Tipe Sewa</th>
                        <td>Per Ruangan</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <!-- Harga Sewa -->
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title fw-bold text-center">Harga Sewa</h3>
                        <p class="card-text text-center">Rp 3.000.000 / Bulan</p>
                        <a href="#" class="btn btn-custom text-white rounded-5 w-100" data-bs-toggle="modal" data-bs-target="#sewaModal">Pesan Booth</a>
                        <div class="mb-3 mt-4">
                            <p class="card-text text-center">Punya pertanyaan? Mau negosiasi harga?</p>
                            <a href="#" class="btn btn-success text-white rounded-5 w-100"><i class="bi bi-whatsapp"></i> Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <!-- Maps -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h3 class="card-title fw-bold text-center">Lokasi</h3>
                        <div id="map-container" style="height: 300px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.6203123716943!2d106.8517662!3d-6.254965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1df5cabeffcf%3A0xd1c21cbb40df9b88!2sKalibata%20City!5e0!3m2!1sen!2sid!4v1629985232141!5m2!1sen!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" class="rounded-3" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @stop