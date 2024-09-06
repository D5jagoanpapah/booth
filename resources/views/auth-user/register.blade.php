<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Brobooth Found a suitable booth for you</title>
<!-- CSS File -->
<link rel="stylesheet" href="/assets/frontend/css/custom.css">
<link rel="stylesheet" href="/assets/frontend/css/responsive.css" />
<!-- CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Boostrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Animation -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>


<body style="background-image: url(../../../public/assets/images/background/bggg.png);">
<div class="login-container">
    <div class="login-card " data-aos="fade-right" data-aos-duration="1000">
        <div class="login-left">
            <h2>Hai👋, Baru ya. Selamat datang di <span class="fw-bold">BRO</span> <span class="text-white fw-bold">BOOTH</span>.</h2>
            <p>Silahkan buat akun terlebih dulu agar banyak bisa meng eksplor booth yang anda inginkan</p>
        </div>
        <div class="login-right">
            <div class="mb-3">
                <h2 class="fw-bold color-primary">Buat Akun</h2>
            </div>
            <form id="formAuthentication"  action="{{ route('register.post') }}" method="POST">
                @csrf
            <div class="mb-3">
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan Nama">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <input type="email" id="email_address" name="email" class="form-control" placeholder="Masukkan Email">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div> 
            <button type="submit" class="btn btn-custom text-white w-100 rounded-5">Register</button>
        </form>
            <div class="divider">
                <span>Atau</span>
            </div>
                <div class="social-btn">
                    <a href="{{ route('auth.google') }}">
                        <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google Icon">
                        <span>Buat akun dengan Google</span>
                    </a>
                </div>      
            <div class="text-center mt-3">
                <span>Sudah memiliki akun? <a href="{{ route('user-login') }}" class="color-primary">Login disini</a></span>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- JavaScript Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="../../../public/assets/frontend/js/custom.js"></script>
    <!-- Initialize Swiper -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>

</html>