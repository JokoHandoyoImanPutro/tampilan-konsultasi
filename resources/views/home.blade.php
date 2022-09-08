<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Oke Garden | Home</title>

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://okegarden.com/assets/img/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="visibility: hidden;" aria-hidden="true">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img src="https://okegarden.com/assets/img/logo.png" class="w-50" alt="">
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu shadow border-0  fs-18" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="/ensiklopedia-garden">Pesan Taman</a></li>
                                <li><a class="dropdown-item" href="/ensiklopedia-design">Pesan Desain</a></li>

                                <li><a class="dropdown-item" href="/konsultasi">Konsultasi Online</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdownBlog" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>
                            <ul class="dropdown-menu shadow border-0  fs-18" aria-labelledby="offcanvasNavbarDropdownBlog">
                                <li><a class="dropdown-item" href="#">Blog</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://wa.wizard.id/774d6b">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profil</a>
                        </li>
                        <div class="d-flex">

                            <li class="nav-item">
                                <a class="btn btn-primary btn-icon" href="#">Daftar</a>
                            </li>
                            <li class="nav-item ms-3">
                                <a class="btn btn-outline-primary btn-icon" href="#">Masuk</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="container">
            <div class="row align-items-center gx-0 gx-lg-5 gy-5">
                <div class="col-md-6">
                    <h1 class="text-header">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Wujudkan Taman </font>
                        </font>
                        <span class="text-primary">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Rumah Ideal</font>
                            </font>
                        </span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;"> , Sekarang Semakin </font>
                        </font>
                        <span class="text-primary">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mudah</font>
                            </font>
                        </span>
                    </h1>
                    <a href="#" class="btn btn-lg btn-primary mt-3">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">About</font>
                        </font>
                    </a>
                    <a href="/konsultasi" class="btn btn-lg btn-outline-primary mt-3" style="margin-left: 10px;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Konsultasi Online</font>
                        </font>
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset ('img/248.png') }}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="services mt-50">
        <div class="container">
            <h1 class="fw-bold text-center">Layanan Kami</h1>
            <div class="row ">
                <div class="col-md-3">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fa-solid fa-tree"></i>
                        </div>
                        <h3>Pesan taman</h3>
                        <p>Pesan taman sesuai dengan kebutuhan dan keinginanmu</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fa-solid fa-pen-ruler"></i>
                        </div>
                        <h3>Pesan Desain</h3>
                        <p>Pesan desain taman yang kamu inginkan</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fa-solid fa-seedling"></i>
                        </div>
                        <h3>Tanaman & Material</h3>
                        <p>Pesan tanaman & material untuk kebutuhan tamanmu</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fa-solid fa-trowel"></i>
                        </div>
                        <h3>Perawatan taman</h3>
                        <p>Panggil tukang untuk merawat tamanmu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-design">
        <div class="container-fluid h-100">
            <div class="p-5 h-100">
                <div class="d-flex align-items-center justify-content-between position-relative h-100">
                    <div class="left">
                        <h3 class="mb-4">About Us</h3>
                        <p class="mb-0">Kami membantumu mencari inspirasi dengan berbagai pilihan
                            desain taman yang akurat dan buildable. Yuk mulai wujudkan impian
                            taman anda dengan Oke Garden.</p>
                    </div>
                    <div class="right">
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5 py-5 text-center text-md-start">
        <div class="container">
            <div class="row gy-3 gx-0 gx-lg-5">
                <div class="col-md">
                    <img src="{{asset ('img/logomagang.png')}}" class="logo" alt="">
                    <p class="fs-16 my-3">OKE Garden adalah sebuah layanan untuk menghubungkan produk petani tanaman hias serta jasa tukang taman untuk menjawab kebutuhan tamanmu yang lebih OK!</p>
                    <div class="social">
                        <a class="btn btn-sm btn-sekunder btn-icon mr-5" id="search-btn" target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a class="btn btn-sm btn-sekunder btn-icon mr-5" id="search-btn" target="_blank" href="#"><i class="fa-brands fa-instagram"></i></i></a>
                        <a class="btn btn-sm btn-sekunder btn-icon mr-5" id="search-btn" target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md">
                    <h3 class="text-white mb-4">Kontak Kami</h3>
                    <ul class="list-unstyled">
                        <li>
                            <span class="text-white fw-bold"> Phone: </span> +62 813 8216 6012
                        </li>
                        <li>
                            <span class="text-white fw-bold"> Email: </span> riselanskap@okegarden.com
                        </li>
                        <li>
                            <span class="text-white fw-bold"> Lokasi: </span> ESTUBIZI Business Center, Gedung Setiabudi 2, Jl. H. R. Rasuna Said, RT.6/RW.7, Kuningan, Karet Kuningan, Setiabudi, Jakarta, 12920
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <h3 class="text-white mb-4">Layanan</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-light text-decoration-none"> Pesan Taman </a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none"> Desain Taman </a>
                        </li>
                        <li>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <h3 class="text-white mb-4">Forum</h3>
                    <ul class="list-unstyled mb-5">
                        <li>
                            <a href="#" class="text-light text-decoration-none"> Tanya Jawab </a>
                        </li>
                        <li>
                            <a href="#" class="text-light text-decoration-none"> FAQ </a>
                        </li>
                    </ul>
                    <a href="#" target="_blank" class="text-white fs-20"> Daftar menjadi mitra? </a>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>