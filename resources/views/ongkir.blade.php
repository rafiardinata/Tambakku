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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <a href="{{ route('update') }}" class="button">
                    <i class="fa-solid fa-user"></i>
                </a>
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
    <div class="container">
        <h2 class="text-center">Halaman Cek Ongkir</h2>

        <div class="w-50">
            <form action="" method="post">
                @csrf
                <div class="mt-3">
                    <label for="origin">Asal Kota</label>
                    <select name="origin" id="origin" class="form-control" required>
                        <option value="">Pilih Kota Asal</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="origin">Kota Tujuan</label>
                    <select name="destination" id="destination" class="form-control" required>
                        <option value="">Pilih Kota Tujuan</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="weight">Berat Paket</label>
                    <input type="number" name="weight" class="weight" id="weight" class="form-control" required>
                </div>
                <div class="mt-3">
                    <label for="courier">Pengiriman</label>
                    <select name="courier" id="courier" class="form-control" required>
                        <option value="">Pilih Jasa Pengiriman</option>
                        <option value="jne">JNE</option>
                        <option value="pos">POS</option>
                        <option value="tiki">TIKI</option>
                    </select>
                </div>
                <div class="mt-3">
                    <input type="submit" name="cekOngkir" class="btn btn-primary w-100">
                </div>
            </form>

            <div class="mt-5">
                @if ($ongkir != '')
                    <h3>Rincian Ongkir</h3>

                    <h4>
                        <ul>
                            <li>Asal Kota : {{ $ongkir['origin_details']['city_name'] }}</li>
                            <li>Kota Tujuan : {{ $ongkir['destination_details']['city_name'] }}</li>
                            <li>Berat Paket : {{ $ongkir['query']['weight'] }} Gram</li>
                        </ul>
                    </h4>

                    @foreach ($ongkir['results'] as $item)
                        <div>
                            <label for="name">Nama : {{ $item['name'] }}</label>
                            @foreach ($item['costs'] as $cost)
                                <div class="mb-3">
                                    <label for="service">Service : {{ $cost['service'] }}</label>
                                    @foreach ($cost['cost'] as $harga)
                                        <div class="mb-3">
                                            <label for="harga">
                                                Harga : {{ $harga['value'] }} (Estimasi : {{ $harga['etd'] }})
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</body>

</html>
