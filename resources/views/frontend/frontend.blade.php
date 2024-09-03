<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Brobooth Found a suitable booth for you</title>
<!-- CSS File -->
<link rel="stylesheet" href="../../../public/assets/frontend/css/custom.css">
<link rel="stylesheet" href="../../../public/assets/frontend/css/responsive.css">
<!-- CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Boostrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Swiper -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-4 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">BRO <span style="color:#008080;">BOOTH</span>.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link custom-nav color-primary" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav color-primary" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav color-primary" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle custom-nav color-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item custom-nav color-primary" href="../../../resources/views/frontend/booth/categories.blade.php">Booth Makanan</a></li>
                            <li><a class="dropdown-item custom-nav color-primary" href="#">Booth Minuman</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item ms-auto">
                        <a class="nav-link color-primary btn btn-custom text-white rounded-5" href="../auth-user/login.blade.php"><i class="bi bi-person-circle"></i> Log-in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container content-wrapper">
        <!-- Carousel -->
        <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="../../../public/assets/images/carousel/carousel1.png" class="d-block w-100 rounded-4" alt="Promo 1">
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="../../../public/assets/images/carousel/carousel2.png" class="d-block w-100 rounded-4" alt="Promo 1">
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="../../../public/assets/images/carousel/carousel3.png" class="d-block w-100 rounded-4" alt="Promo 1">
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
                        <img src="../../../public/assets/images/bengkelbooth1.jpg_1724293599429.jpg" class="card-img-top">
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
                            <img src="../../../public/assets/images/promosi/daftar.png" class="mb-3 img-fluid promotion-img">
                            <h5 class="card-title fw-bold mb-3">Daftar / Membuat Akun</h5>
                            <p class="card-text ">Daftar dan buat akun Brobooth anda untuk mempermudah proses penyewaan booth Anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-0  mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="../../../public/assets/images/promosi/pilih.png" class="mb-3 img-fluid promotion-img">
                            <h5 class="card-title fw-bold mb-3">Pilih Booth yang anda inginkan</h5>
                            <p class="card-text">Pilih booth yang sesuai dengan kebutuhan acara Anda dan nikmati kemudahan dalam proses penyewaan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-0  mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="../../../public/assets/images/promosi/pembayaran.png" class="mb-3 img-fluid promotion-img">
                            <h5 class="card-title fw-bold mb-3">Lanjutkan pembayaran anda</h5>
                            <p class="card-text">Lakukan pembayaran untuk menyelesaikan reservasi booth Anda. Dengan Brobooth, proses pembayaran mudah dan aman!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-0  mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="../../../public/assets/images/promosi/setuju.png" class="mb-3 img-fluid promotion-img">
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
                            <div class="swiper-slide"><img src="../../../public/assets/images/rating-assets/rating-1.png" class="img-fluid rounded-4 rating-img" alt=""></div>
                        </div>
                <div class="col-md-3">
                            <div class="swiper-slide"><img src="../../../public/assets/images/rating-assets/rating-v-1.png" class="img-fluid rounded-4 rating-img" alt=""></div>
                        </div>
                <div class="col-md-3">
                            <div class="swiper-slide"><img src="../../../public/assets/images/rating-assets/rating-6.png" class="img-fluid rounded-4" alt=""></div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3">
                            <p class="mt-5 mb-0 rating-text">dan masih banyak lagi...</p>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Footer -->
    <footer class="bg-custom text-white pt-5 pb-4 mt-5">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-md-6 col-lg-4 col-xl-3 mx-auto mt-3">
                    <h1 class="text-uppercase mb-4 font-weight-bold text-white fw-bold">BRO BOOTH.</h1>
                    <p>
                        <i class="bi bi-house-door-fill me-2"></i>Jl. Raya Cileungsi Jonggol KM 1 No.12, Cileungsi Kidul, Kec. Cileungsi, Kab. Bogor
                    </p>
                    <p class="text-white">&copy; 2024 Hak Cipta Dilindungi | brobooth.com</p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h1 class=" mb-4 fw-bold text-white">TEMUKAN</h1>
                    <p>
                        <a href="#" class="text-white text-decoration-none">Booth Makanan</a>
                    </p>
                    <p>
                        <a href="#" class="text-white text-decoration-none">Booth Minuman</a>
                    </p>
                    <a href="">
                        <i class="bi bi-instagram text-white me-3 text-decoration-none h2"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-whatsapp text-white me-3 text-decoration-none h2"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="../../../public/assets/frontend/js/custom.js"></script>
</body>

</html>