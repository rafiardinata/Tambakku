<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambakku</title>
    <link rel="shortcut icon" type="image" href="/image/Logo1.png" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet" />
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
    <div class="home-section">
        <!-- navbar -->

        <!-- navbar -->

        <!-- home content -->
        <section class="home">
            <div class="content">
                <h3>TAMBAKKU</h3>
                <p>
                    Selamat datang di TAMBAKKU, platform e-commerce terdepan untuk
                    <br>jual beli ikan tambak segar dan berkualitas! </br>Temukan beragam ikan
                    pilihan langsung dari tambak dengan harga terbaik di sini.
                </p>
                <button id="shopnow">Pesan Sekarang</button>
            </div>
        </section>
        <!-- home content -->
    </div>

    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926">
                    <img src="./image/ikanGurame.jpg" alt="" />
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Ikan segar</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Provident, ratione!
                        </p>
                        <p>
                            <strong>Rp.15.000/kg</strong>
                        </p>
                        <button>Pesan</button>
                    </div>
                </div>
            </div>
            <div class="udang col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926">
                    <img src="./image/udangVaname.png" alt="" />
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Udang segar</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Provident, ratione!
                        </p>
                        <p>
                            <strong>Rp. 15.000/kg</strong>
                        </p>
                        <button>Pesan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926">
                    <img src="./image/kepiting.jfif" alt="" />
                    <div class="card-img-overlay">
                        <h5 class="card-titel">kepiting</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p>
                            <strong>Rp. 15.000/kg</strong>
                        </p>
                        <button>Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top cards -->

    <!-- banner -->
    <div class="banner">
        <div class="content">
            <h1>Dapatkan hasil tambak yang berkualitas</h1>
            <div id="bannerbtn"><button>Pesan Sekarang</button></div>
        </div>
    </div>
    <!-- banner -->

    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center">PRODUCT</h1>
        <div class="row" style="margin-top: 30px ">
            {{-- <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/ikanGurame.jpg" alt="" />
                    <div class="card-body">
                        <h3>Ikan Gurame</h3>
                        <p>Ikan Gurame segar langsung dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 15.000/kg
                            <a href={{ route('checkout.show') }}><i class="fa-solid fa-hand-holding-dollar"></i></a>
                        </h5>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="{{ asset('image/ikanNila.jpg') }}" alt="Ikan Nila" />
                    <div class="card-body">
                        <h3>Ikan Nila</h3>
                        <p>Ikan segar langsung dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 15.000/kg
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </h5>
                        @if (session('token'))
                            <form action="{{ route('checkout.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Ikan Nila">
                                <input type="hidden" name="product_price" value="15000">
                                <button type="submit" class="btn btn-primary mt-3">Beli</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-primary mt-3">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Beli</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/ikanLele.jpg" alt="Ikan Lele" />
                    <div class="card-body">
                        <h3>Ikan Lele</h3>
                        <p>Ikan lele segar dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 12.000/kg
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </h5>
                        @if (session('token'))
                            <form action="{{ route('checkout.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Ikan Lele">
                                <input type="hidden" name="product_price" value="12000">
                                <button type="submit" class="btn btn-primary mt-3">Beli</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-primary mt-3">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Beli</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/kepiting.jfif" alt="" />
                    <div class="card-body">
                        <h3>Kepiting</h3>
                        <p>Kepiting segar dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 60.000/kg
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </h5>
                        @if (session('token'))
                            <form action="{{ route('checkout.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Kepiting">
                                <input type="hidden" name="product_price" value="60000">
                                <button type="submit" class="btn btn-primary mt-3">Beli</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-primary mt-3">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Beli</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-4 py-md-4">
                <div class="card">
                    <img src="./image/udangVaname.png" alt="" />
                    <div class="card-body">
                        <h3>Udang Vaname</h3>
                        <p>Udang segar dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 50.000/kg
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </h5>
                        @if (session('token'))
                            <form action="{{ route('checkout.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Udang Vaname">
                                <input type="hidden" name="product_price" value="50000">
                                <button type="submit" class="btn btn-primary mt-3">Beli</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-primary mt-3">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Beli</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/ikanNila.jpg" alt="" />
                    <div class="card-body">
                        <h3>Ikan Nila</h3>
                        <p>Ikan segar langsung dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 15.000/kg
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </h5>
                        @if (session('token'))
                            <form action="{{ route('checkout.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Ikan Nila">
                                <input type="hidden" name="product_price" value="15000">
                                <button type="submit" class="btn btn-primary mt-3">Beli</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-primary mt-3">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Beli</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/ikanNila.jpg" alt="" />
                    <div class="card-body">
                        <h3>Ikan Nila</h3>
                        <p>Ikan segar langsung dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 15.000/kg
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </h5>
                        @if (session('token'))
                            <form action="{{ route('checkout.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Ikan Nila">
                                <input type="hidden" name="product_price" value="15000">
                                <button type="submit" class="btn btn-primary mt-3">Beli</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-primary mt-3">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Beli</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/ikanNila.jpg" alt="" />
                    <div class="card-body">
                        <h3>Ikan Nila</h3>
                        <p>Ikan segar langsung dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 15.000/kg
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </h5>
                        @if (session('token'))
                            <form action="{{ route('checkout.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Ikan Nila">
                                <input type="hidden" name="product_price" value="15000">
                                <button type="submit" class="btn btn-primary mt-3">Beli</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-primary mt-3">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Beli</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/ikanNila.jpg" alt="" />
                    <div class="card-body">
                        <h3>Ikan Nila</h3>
                        <p>Ikan segar langsung dari tambak</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>
                            Rp. 15.000/kg
                            <span><i class="fa-solid fa-hand-holding-dollar"></i></span>
                        </h5>
                        @if (session('token'))
                            <form action="{{ route('checkout.show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_name" value="Ikan Nila">
                                <input type="hidden" name="product_price" value="15000">
                                <button type="submit" class="btn btn-primary mt-3">Beli</button>
                            </form>
                        @else
                            <button type="submit" class="btn btn-primary mt-3">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">Beli</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- product cards -->

        <!-- product -->
        <div class="container" style="margin-top: 100px">
            <hr />
        </div>
        <div class="container">
            <h3 style="font-weight: bold">PRODUCT.</h3>
            <p>
                Di Tambakku, kami dengan bangga menawarkan beragam produk tambak berkualitas tinggi, meliputi ikan,
                udang, dan kepiting yang dibudidayakan dengan standar terbaik. Setiap produk kami dipilih dengan cermat
                untuk memastikan kesegaran, rasa, dan kualitas nutrisinya. Kami menyediakan berbagai jenis ikan seperti
                lele, nila, patin, gurame, dan bandeng yang dibesarkan dengan metode budidaya ramah lingkungan. Selain
                itu, kami juga menyediakan udang vaname dan udang windu yang dikenal dengan tekstur dagingnya yang
                lembut dan rasa yang lezat. Tidak ketinggalan, kepiting bakau yang kami tawarkan merupakan pilihan
                sempurna untuk hidangan laut yang istimewa. Dengan komitmen kami terhadap praktik budidaya yang
                berkelanjutan dan kesejahteraan petani tambak, kami memastikan setiap produk yang Anda terima adalah
                yang terbaik dari perairan kami.
            </p>

            <hr />
        </div>
        <!-- product -->

        <!-- offer -->
        <div class="container" id="offer">
            <div class="row">
                <div class="col-md-4 py-3 py-md-0">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <h5>Free Shipping</h5>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <i class="fa-solid fa-truck"></i>
                    <h5>Fast Delivery</h5>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <h5>Big Choice</h5>
                </div>
            </div>
        </div>
        <!-- offer -->

        <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt=""
                    width="50px" /></i></a>
    </div>
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
                        <strong><i class="fa-solid fa-envelope"></i> Email:
                            <strong>example@gmail.com</strong></strong>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
