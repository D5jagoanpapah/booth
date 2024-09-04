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
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="position-relative">
                    <img src="/assets/frontend/images/bengkelbooth1.jpg_1724293599429.jpg" class="card-img-top">
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
<!-- Promoosi -->
<div class="custom-bg">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-nowrap ">Cara Mudah Sewa Booth <br>
                di BRO BOOTH.</h1>
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
                        <p class="card-text">Booth Anda siap diantar! Terima kasih telah memilih Brobooth, dan semoga acara Anda sukses!</p>
                    </div>
                </div>
            </div>
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
                        <div class="swiper-slide"><img src="/assets/frontend/images/rating-assets/rating-1.png" class="img-fluid rounded-4 rating-img" alt=""></div>
                    </div>
            <div class="col-md-3">
                        <div class="swiper-slide"><img src="/assets/frontend/images/rating-assets/rating-v-1.png" class="img-fluid rounded-4 rating-img" alt=""></div>
                    </div>
            <div class="col-md-3">
                        <div class="swiper-slide"><img src="/assets/frontend/images/rating-assets/rating-6.png" class="img-fluid rounded-4" alt=""></div>
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