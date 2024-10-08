<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Brobooth Found a suitable booth for you</title>
<!-- CSS File -->
<link rel="stylesheet" href="/assets/frontend/css/custom.css">
<link rel="stylesheet" href="/assets/frontend/css/responsive.css">
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

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
<!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

 {{-- sweetalert2 --}}
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>


    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">BRO<span style="color:#008080;">BOOTH</span>.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link custom-nav color-primary" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav color-primary" aria-current="page" href="{{ route('booth.about') }}">About</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle custom-nav color-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item custom-nav color-primary" href="">Booth </a></li>
                          

                        </ul>
                    </li> --}}
                </ul>
                <ul class="nav">
                    <li class="nav-item ms-auto">
                        <a class="nav-link color-primary btn btn-custom text-white rounded-5" href="/login"><i class="bi bi-person-circle"></i> Log In / Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


   @yield('content')


    <!-- Footer -->
    <footer class="bg-custom text-white pt-5 pb-4 mt-5">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-md-6 col-lg-4 col-xl-3 mx-auto mt-3">
                    <h1 class="text-uppercase mb-4 font-weight-bold text-white fw-bold">BROBOOTH.</h1>
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


    {{-- Jquery --}}
    <script src="/assets/manage/assets/vendor/libs/jquery/jquery.js"></script>
    
    <!-- JavaScript Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="../../../public/assets/frontend/js/custom.js"></script>

    @stack('script')
    @include('components.alert')
</body>

</html>