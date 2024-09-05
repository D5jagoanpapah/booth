@extends('frontend.layout')

@section('content')
    <div class="container mt-4">
        <div class="row mb-4">
            <!-- Filter & Search Section -->
            <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <input type="text" class="form-control me-2" placeholder="Cari lokasi, kota, provinsi...">
                    <select class="form-select me-2">
                        <option selected>1 tipe properti dipilih.</option>
                    </select>
                    <button class="btn btn-custom text-white rounded-5"><i class="bi bi-search "></i></button>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Booth Section -->
            <div class="col-lg-9 order-lg-1 order-2">
                <h5>Booth Disewakan</h5>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="position-relative">
                                <img src="../../../../public/assets/images/bengkelbooth1.jpg_1724293599429.jpg" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <a href="../../../resources/views/frontend/booth/index.blade.php" class="text-decoration-none">
                                    <h5 class="card-title text-dark">Booth Minuman teh solo</h5>
                                    <p class="card-text color-primary">Rp 000.000 / Bulan</p>
                                    <span class="badge bg-custom text-white">Sewa</span>
                                    <p class="text-muted mt-2"><i class="bi bi-geo-alt"></i> Kota Jakarta Selatan</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar Filter -->
            <div class="col-lg-3 mb-4 order-lg-2 order-1">
                <h5>Filter Booth</h5>
                <hr>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota / Kabupaten</label>
                    <select id="kota" class="form-select">
                        <option selected>Semua Kota</option>
                        <option value="1">Jakarta</option>
                        <option value="2">Bandung</option>
                    </select>
                </div>
                <div class="mb-3">
                    <h6>Filter Booth</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filterListing" id="semua" checked>
                        <label class="form-check-label" for="semua">Booth Makanan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filterListing" id="semua" checked>
                        <label class="form-check-label" for="semua">Booth Minuman</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filterListing" id="semua" checked>
                        <label class="form-check-label" for="semua">Booth Pameran</label>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>Durasi</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="durasi" id="semuaDurasi" checked>
                        <label class="form-check-label" for="semuaDurasi">Semua</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @stop