<?php

use Illuminate\Support\Carbon;

$dt = new Carbon();
date_default_timezone_set('Asia/Jakarta');
$week = Carbon::now()->isoFormat('dddd');
$date = Carbon::now()->isoFormat('MMMM D , Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylekonsul.css') }}" rel="stylesheet">

    <title>Oke Garden | Konsultasi</title>

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
                                <li><a class="dropdown-item" href="#">Pesan Taman</a></li>
                                <li><a class="dropdown-item" href="#">Pesan Desain</a></li>

                                <li><a class="dropdown-item" href="#">Konsultasi Online</a></li>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdownBlog" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mitra
                            </a>
                            <ul class="dropdown-menu shadow border-0  fs-18" aria-labelledby="offcanvasNavbarDropdownBlog">
                                <li><a class="dropdown-item" href="#">Mitra</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <img src="{{ asset ('img/portrait.jpg') }}" alt="profil">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section class="konsul section" id="konsul">
        <div class="container">
            <div class="section-header">
                <h3 class="title">Konsultasi Taman</h3>
                <p class="text">Klik dibawah ini untuk memilih tanggal & waktu yang tersedia
                    untuk memanggil konsultan kami
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="calendar">
                        <div class="calendar-header">
                            <span class="month-picker" id="month-picker">February</span>
                            <div class="year-picker">
                                <span class="year-change" id="prev-year">
                                    <pre><</pre>
                                </span>
                                <span id="year">2021</span>
                                <span class="year-change" id="next-year">
                                    <pre>></pre>
                                </span>
                            </div>
                        </div>
                        <div class="calendar-body">
                            <div class="calendar-week-day">
                                <div>Mo</div>
                                <div>Tu</div>
                                <div>We</div>
                                <div>Th</div>
                                <div>Fr</div>
                                <div>Sa</div>
                                <div>Su</div>
                            </div>
                            <div class="calendar-days"></div>
                        </div>
                        <div class="month-list"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="timeForm">
                        <div class="time-header">
                            <h3><?php echo $week ?></h3>
                            <p><?php echo $date ?></p>
                        </div>
                        <div class="time-body">
                            <h5>Pilih Waktu</h5>
                            <p>Durasi konsultasi 30 menit</p>
                        </div>
                        <div class="row-btn">
                            <button type="button" class="btn btn-outline-secondary">09.00</button>
                            <button type="button" class="btn btn-outline-secondary">13.00</button>
                        </div>
                        <div class="row-btn">
                            <button type="button" class="btn btn-outline-secondary">10.00</button>
                            <button type="button" class="btn btn-outline-secondary">14.00</button>
                        </div>
                        <div class="row-btn">
                            <button type="button" class="btn btn-outline-secondary">11.00</button>
                            <button type="button" class="btn btn-outline-secondary">15.00</button>
                        </div>
                        <div class="row-btn">
                            <button type="button" class="btn btn-outline-secondary">12.00</button>
                            <button type="button" class="btn btn-outline-secondary">16.00</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="identitas">
                <div class="identitas-header">
                    <h3>Informasi Data diri</h3>
                </div>
                <div class="identitas-body">
                    <div class="row gx-2">
                        <div class="col-auto">
                            <label for="nama" class="nama">Nama Lengkap</label>
                            <input class="form-control" type="text" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-auto">
                            <label for="no" class="no">No Hp</label>
                            <input class="form-control" type="text" placeholder="No HP" aria-label="readonly input example">
                        </div>
                    </div>
                    <div class="row gx-2">
                        <div class="col-auto">
                            <label for="alamat" class="no">Alamat</label>
                        </div>
                        <div class="col-auto">
                            <div class="box">
                                <textarea class="form-alamat" id="alamat" rows="3" placeholder="Tuliskan Alamat Lengkap ...."></textarea>
                                <span class="add" style="text-decoration: underline;">Tambah Alamat Baru</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="konsul-taman">
                <div class="header">
                    <h3>Informasi Konsultan Tanaman</h3>
                </div>
                <div class="konsul-body">
                    <div class="title">
                        <h5>Lahan Taman</h5>
                        <p>Pilih jumlah lahan taman yang akan dibuat.</p>
                    </div>
                    <div class="btn-pilih">
                        <button type="button" class="btn btn-outline-success">1 Lahan Taman</button>
                        <button type="button" class="btn btn-outline-success">2 Lahan Taman</button>
                        <button type="button" class="btn btn-outline-success">Lebih dari 2 Lahan Taman</button>
                    </div>
                    <div class="title-tema">
                        <h5>Tema Taman</h5>
                        <p>Pilih tema taman yang akan dibuat.</p>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <span class="ctt" style="text-decoration: underline;">Catatan :</span>
                        Jika anda belum memiliki inspirasi tema taman makan anda bisa melewati
                        tahapan ini, konsultan kami akan memberikan rekomendasi terbaik untuk
                        taman anda.
                    </div>
                    <div class="pilihan">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="{{asset ('img/tm.jpg') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Taman Minimalis</h5>
                                        <p class="card-text">Taman yang indah dilahan yang sempit sesuai
                                            dengan kebutuhan taman</p>
                                        <a href="#" class="card-link">Pilih</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="{{asset ('img/tk.jpg') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Taman Kering</h5>
                                        <p class="card-text">Taman yang dirancang untuk menghasilkan suasana alam dialam dan diluar rumah</p>
                                        <a href="#" class="card-link">Pilih</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="{{asset ('img/tp.jpg') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Taman Tropis</h5>
                                        <p class="card-text">Taman yang paling sesuai dengan iklim di Indonesia</p>
                                        <a href="#" class="card-link">Pilih</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-ukuran">
                        <h5>Estimasi Ukuran Taman</h5>
                    </div>
                    <div class="ukuran">
                        <button type="button" class="btn btn-outline-success">
                            < 10m2 </button>
                                <button type="button" class="btn btn-outline-success">11-20m2</button>
                                <button type="button" class="btn btn-outline-success">21-30m2</button>
                                <button type="button" class="btn btn-outline-success">31-40m2</button>
                                <button type="button" class="btn btn-outline-success">41-50m2</button>
                                <button type="button" class="btn btn-outline-success">51-60m2</button>
                                <button type="button" class="btn btn-outline-success">>100m2</button>
                    </div>
                    <div class="btn-footer">
                        <button type="button" class="btn btn-success-batal">Batal</button>
                        <button type="button" class="btn btn-success">OKE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/stylekonsul.js') }}"></script>
</body>

</html>