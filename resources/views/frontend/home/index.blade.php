@extends('frontend.layout')




@section('content')

<div class="container content-wrapper">
    <!-- Carousel -->
    <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="/assets/frontend/images/carousel/carousel1.png" class="d-block w-100 rounded-4" alt="Promo 1">
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="/assets/frontend/images/carousel/carousel2.png" class="d-block w-100 rounded-4" alt="Promo 1">
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="/assets/frontend/images/carousel/carousel3.png" class="d-block w-100 rounded-4" alt="Promo 1">
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Search Bar -->
    <div class="search-bar d-flex justify-content-center mt-4">
        <div class="input-group" style="max-width: 600px; width: 100%;">
            <input type="text" class="form-control" placeholder="Cari lokasi, kota, provinsi...">
            <button class="btn btn-custom text-white" type="button"><i class="bi bi-search"></i></button>
        </div>
    </div>
</div>
<!-- Produk -->
<div class="container py-5">
    <h2 class="mb-3 fw-bold">Booth Disewakan</h2>
    <div class="row g-4">
        <!-- Rekomendasi -->
        @foreach ($booths as $booth)
        
        <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm">
                <div class="position-relative">
                    
                    @foreach ($booth->images as $image)
                    <img src="{{ Storage::url($image->image_url) }}" class="card-img-top">
                    @endforeach
                    
                </div>
                <div class="card-body">
                    <a href="{{ route('view.booth',   $booth->id) }}" class="text-decoration-none">
                        <h5 class="card-title text-dark"> {{ $booth->name }}</h5>
                        <p class="card-text color-primary">Rp{{ number_format($booth->price, '0', '.', '.') }}/Bulan</p>
                        <span class="badge bg-custom text-white">Sewa</span>
                        
                        <p class="text-muted mt-2"><i class="bi bi-geo-alt"></i> {{ $booth?->vendor?->address->district . ', ' . $booth->vendor->address->city->type . '. ' .  $booth->vendor->address->city->name . ', ' . $booth->vendor->address->province->name }}</p>
                    </a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

<!-- Promoosi -->
<div class="custom-bg">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-nowrap ">Cara Mudah Sewa Booth <br>
                di BROBOOTH.</h1>
        </div>
        <div class="row text-center ">
            <div class="col-lg-3 mt-0  mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="/assets/frontend/images/promosi/daftar.png" class="mb-3 img-fluid promotion-img">
                        <h5 class="card-title fw-bold mb-3">Daftar / Membuat Akun</h5>
                        <p class="card-text ">Daftar dan buat akun Brobooth anda untuk mempermudah proses penyewaan booth Anda</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-0  mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="/assets/frontend/images/promosi/pilih.png" class="mb-3 img-fluid promotion-img">
                        <h5 class="card-title fw-bold mb-3">Pilih Booth yang anda inginkan</h5>
                        <p class="card-text">Pilih booth yang sesuai dengan kebutuhan acara Anda dan nikmati kemudahan dalam proses penyewaan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-0  mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="/assets/frontend/images/promosi/pembayaran.png" class="mb-3 img-fluid promotion-img">
                        <h5 class="card-title fw-bold mb-3">Lanjutkan pembayaran anda</h5>
                        <p class="card-text">Lakukan pembayaran untuk menyelesaikan reservasi booth Anda. Dengan Brobooth, proses pembayaran mudah dan aman!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-0  mb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="/assets/frontend/images/promosi/setuju.png" class="mb-3 img-fluid promotion-img">
                        <h5 class="card-title fw-bold mb-3">Booth anda siap diantar</h5>
                        <p class="card-text">Booth Anda siap diantar! Terima kasih telah memilih Brobooth, dan semoga bisnis Anda sukses!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- About -->
  <div class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h1 class="fw-bold mb-4 color-primary">Tentang BroBooth.</h1>
            <p class="color-primary mb-4">
                <strong>Brobooth.</strong> adalah platform inovatif yang diciptakan untuk memudahkan UMKM di Indonesia dalam mencari dan menyewa booth berkualitas dari berbagai vendor terpercaya.
            </p>
        </div>
        <div class="mb-3 text-center">
            <a href="{{ route('booth.about') }}" class="btn btn-custom rounded-5 d-inline-block text-white ">Lihat Selengkapnya</a>
        </div>
    </div>
</div>

<!-- Rating -->
<section id="rating">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <h2 class="mb-2 mt-4">Rating By</h2>
                <div class="star-rating">
                    <i class="bi bi-star-fill text-warning h2"></i>
                    <i class="bi bi-star-fill text-warning h2"></i>
                    <i class="bi bi-star-fill text-warning h2"></i>
                    <i class="bi bi-star-fill text-warning h2"></i>
                    <i class="bi bi-star-fill text-warning h2"></i>
                </div>
                <h4 class="mt-2 "><i class="bi bi-google color-primary h1"></i> Google</h4>
            </div>
            <!-- Swiper Section -->
            <div class="col-md-3">
                        <div class="rating-card"><img src="/assets/frontend/images/rating-assets/rating-1.png" class="img-fluid rounded-4 rating-img" alt=""></div>
                    </div>
            <div class="col-md-3">
                        <div class="rating-card"><img src="/assets/frontend/images/rating-assets/rating-v-1.png" class="img-fluid rounded-4 rating-img" alt=""></div>
                    </div>
            <div class="col-md-3">
                        <div class="rating-card"><img src="/assets/frontend/images/rating-assets/rating-6.png" class="img-fluid rounded-4" alt=""></div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3">
                        <p class="mt-5 mb-0 rating-text">dan masih banyak lagi...</p>
                    </div>
                </div>
            </div>
</section>

@stop