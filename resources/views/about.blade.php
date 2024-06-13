<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambakku</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>

<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="other-links">
            @if (session('token'))
                <p>{{ session('account')['username'] }}</p>
                <form action={{ route('logout') }} method="POST">@csrf<button type="submit">Logout</button></form>
            @else
                <button id="btn-login"><a href={{ route('login') }}>Login</a></button>
                <button id="btn-signup"><a href={{ route('signup') }}>Sign up</a></button>
            @endif
            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-hand-holding-dollar"></i>
        </div>
    </div>
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./image/Logo1.png" alt="" width="100px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href={{ route('welcome') }}>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('product') }}>Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('ongkir') }}>Cek Ongkir</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori Produk
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c50;">
                            <li><a class="dropdown-item" href="#">Udang</a></li>
                            <li><a class="dropdown-item" href="#">Kepiting</a></li>
                            <li><a class="dropdown-item" href="#">Ikan</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('about') }}>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('contact') }}>Contact Us</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- about -->
    <div class="container" id="about">
        <h1>ABOUT US</h1>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                    <img src="./image/Logoo.png" alt="">
                </div>
            </div>
            <div class="col-md-6 py-3 py-md-0 rowAbout">
                <p> Di Tambakku, kami dengan bangga menawarkan beragam produk tambak berkualitas tinggi, meliputi ikan,
                    udang, dan kepiting yang dibudidayakan dengan standar terbaik. Setiap produk kami dipilih dengan
                    cermat
                    untuk memastikan kesegaran, rasa, dan kualitas nutrisinya. Kami menyediakan berbagai jenis ikan
                    seperti
                    lele, nila, patin, gurame, dan bandeng yang dibesarkan dengan metode budidaya ramah lingkungan.
                    Selain
                    itu, kami juga menyediakan udang vaname dan udang windu yang dikenal dengan tekstur dagingnya yang
                    lembut dan rasa yang lezat. Tidak ketinggalan, kepiting bakau yang kami tawarkan merupakan pilihan
                    sempurna untuk hidangan laut yang istimewa. Dengan komitmen kami terhadap praktik budidaya yang
                    berkelanjutan dan kesejahteraan petani tambak, kami memastikan setiap produk yang Anda terima adalah
                    yang terbaik dari perairan kami.</p>
            </div>
        </div>
    </div>
    <!-- about -->


    <!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Bebas Ongkir</h5>
                <p class="offer">Untuk pesanan di atas 500 ribu</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Pengiriman Cepat</h5>
                <p class="offer">Ke seluruh Indonesia</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Produk terbaik</h5>
                <p class="offer">Khusus untuk pembeli Tambakku</p>
            </div>
        </div>
    </div>
    <!-- offer -->






    <!-- footer -->
    <footer id="footer" style="margin-top: 50px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-content">
                        <h3>Tambakku</h3>
                        <p>Website e-commerce hasil tambak</p>
                        <strong><i class="fas fa-phone"></i> Phone: <strong>+62 8524 1221</strong></strong><br>
                        <strong><i class="fa-solid fa-envelope"></i> Email:
                            <strong>tambakku@gmail.com</strong></strong>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Usefull Links</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Privacy policay</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Produk kami</h4>
                        <ul>
                            <li><a href="#">Ikan Segar</a></li>
                            <li><a href="#">Kepiting Segar</a></li>
                            <li><a href="#">Udang Segar</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Media Sosial Kami</h4>
                        <p>Ingin mendapatkan informasi lebih lanjut? Anda dapat mengikuti media sosial kami</p>
                        <div class="socail-links mt-3">
                            <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                            <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong>Fashion</strong>.All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- footer -->

    <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
