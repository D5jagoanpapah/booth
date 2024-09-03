<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Brobooth Found a suitable booth for you</title>
<!-- CSS File -->
<link rel="stylesheet" href="../../../../public/assets/frontend/css/custom.css">
<link rel="stylesheet" href="../../../../public/assets/frontend/css/responsive.css">
<!-- CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Boostrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                        <a class="nav-link custom-nav color-primary" aria-current="page" href="../../../../resources/views/frontend/frontend.blade.php">Home</a>
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
                            <li><a class="dropdown-item custom-nav color-primary" href="#">Booth Makanan</a></li>
                            <li><a class="dropdown-item custom-nav color-primary" href="#">Booth Minuman</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item ms-auto">
                        <a class="nav-link color-primary btn btn-custom text-white rounded-5" href="../../auth-user/login.blade.php"><i class="bi bi-person-circle"></i> Log-in</a>
                    </li>
                </ul>
            </div>  
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <!-- Gambar Produk -->
            <div class="col-12">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../../../public/assets/images/carousel/carousel1.png" class="d-block w-100 rounded-4" alt="Promo 1">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../../public/assets/images/carousel/carousel3.png" class="d-block w-100 rounded-4" alt="Promo 1">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../../public/assets/images/carousel/carousel3.png" class="d-block w-100 rounded-4" alt="Promo 1">
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
                        <i class="bi bi-instagram text-white me-3 h1"></i>
                      
                        <i class="bi bi-whatsapp text-white me-3 h1"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Modal -->
    <div class="modal fade" id="sewaModal" tabindex="-1" aria-labelledby="sewaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="startDate" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control rounded-5" id="startDate" required>
                        <div class="invalid-feedback">Silahkan isi Perkiraan Mulai Sewa.</div>
                    </div>
                    <div class="mb-3">
                        <label for="periodeSewa" class="form-label">Periode Sewa</label>
                        <select class="form-select rounded-5" id="periodeSewa">
                            <option value="bulan">Bulan</option>
                            <!-- Tambahkan opsi lain jika diperlukan -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label ">Durasi</label>
                        <div class="input-group rounded-5">
                            <button class="btn btn-custom text-white rounded-5 me-3" type="button" id="decrement">-</button>
                            <input type="text" class="form-control text-center rounded-5" id="duration" value="1">
                            <button class="btn btn-custom text-white rounded-5 ms-3" type="button" id="increment">+</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <p>Subtotal Harga</p>
                        <p id="subtotalHarga">Rp 10.000</p>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center ">
                    <a href="../../../../resources/views/frontend/payment/payment.blade.php" type="button" class="btn btn-custom text-white rounded-5">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="../../../../public/assets/frontend/js/custom.js"></script>


</body>

</html>