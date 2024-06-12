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

    <!-- contact -->
    <div class="container" id="contact">
        <h1 class="text-center">CONTACT US</h1>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-phone"> Phone</i>
                    <h6>+6281251638</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fa-solid fa-envelope"> Email</i>
                    <h6>tambakku@gmail.com</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fa-solid fa-location-dot"> Address</i>
                    <h6>Jl Tambak Di Sby</h6>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Name">
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="text" class="form-control form-control" placeholder="Email">
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <input type="number" class="form-control form-control" placeholder="Phone">
            </div>
            <div class="form-group" style="margin-top: 30px;">
                <textarea class="form-control" id=""rows="5" placeholder="Message"></textarea>
            </div>
            <div id="messagebtn" class="text-center"><button>Message</button></div>
        </div>
    </div>
    <!-- contact -->









    <!-- footer -->
    <footer id="footer" style="margin-top: 50px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-content">
                        <h3>Fashion</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, hic?</p>
                        <p>
                            Karcahi <br>
                            Sindh <br>
                            Pakistan <br>
                        </p>
                        <strong><i class="fas fa-phone"></i> Phone: <strong>+000000000000000</strong></strong><br>
                        <strong><i class="fa-solid fa-envelope"></i> Email: <strong>example@gmail.com</strong></strong>
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
                        <h4>Our Social Network</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ad?</p>
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
            <div class="credits">
                Designed By <a href="#">SA coding</a>
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
