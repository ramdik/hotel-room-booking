<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/style.css?v=11">
    <title>Form Pemesanan Kamar Hotel</title>
</head>

<body>
    <div class="fluid-container g-0">
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg bg-white sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand me-5 ms-4 fw-bold" href="#">Nuansa Bali</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link me-2 text-dark" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 text-dark" href="#type-room">Tipe Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 text-dark" href="#order-now">Pesan Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 text-dark" href="#about">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Nav End -->

        <!-- Header -->
        <header class="row-sm-4 header">
            <div class="container h-100 d-flex flex-column justify-content-center align-items-sm-center">
                <h1 class="text-center fw-bold fs-2 text-white bg-primary p-2">Selamat Datang Di Nuansa Bali <br> Hotel & Resort</h1>
                <a href="#order-now" class="btn btn-primary p-3 fs-5 fw-bold">Pesan Sekarang</a>
            </div>
        </header>
        <!-- Header End -->

        <!-- Main -->
        <div class="row-sm-4 pb-5 bg-white main" id="type-room">
            <!-- Title -->
            <h1 class="text-center pt-5 pb-3 fs-2 fw-bold text-dark">Product Kami</h1>
            <h3 class="pb-5 fs-5 text-center">Kami menyediakan 3 layanan kamar untuk anda</h3>
            <!-- Card -->
            <div class="row row-cols-1 row-cols-md-3 pt-5 g-4 d-flex flex-row align-item-center justify-content-evenly">
                <div class="col-sm-3 g-0">
                    <div class="card h-100">
                        <img src="./assets/images/room1.png" class="card-img-top" alt="#gambar gagal upload">
                        <div class="card-body">
                            <h5 class="card-title">Type Standar</h5>
                            <p class="card-text text-primary fw-bold">Single Bed</p>
                            <p class="text-muted">Fasilitas:</p>
                            <ul class="text-muted">
                                <li>Bathroom</li>
                                <li>Telephone</li>
                                <li>Wi-Fi</li>
                            </ul><br><br>
                            <p class="text-center">Harga hanya</p>
                            <h3 class="text-center">Rp. 500.000</h3>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#order-now" class="btn btn-primary w-100">Order Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 g-0">
                    <div class="card h-100">
                        <img src="./assets/images/room2.png" class="card-img-top" alt="#gambar gagal upload">
                        <div class="card-body">
                            <h5 class="card-title">Type Deluxe</h5>
                            <p class="card-text text-primary fw-bold">King-size Bed</p>
                            <p class="text-muted">Fasilitas:</p>
                            <ul class="text-muted">
                                <li>Bathroom</li>
                                <li>Telephone</li>
                                <li>Wi-Fi</li>
                                <li>TV</li>
                            </ul><br>
                            <p class="text-center">Harga hanya</p>
                            <h3 class="text-center">Rp. 800.000</h3>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#order-now" class="btn btn-primary w-100">Order Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 g-0">
                    <div class="card h-100">
                        <img src="./assets/images/room3.png" class="card-img-top" alt="#gambar gagal upload">
                        <div class="card-body">
                            <h5 class="card-title">Type Family</h5>
                            <p class="card-text text-primary fw-bold">Double-size Bed</p>
                            <p class="text-muted">Fasilitas:</p>
                            <ul class="text-muted">
                                <li>Bathroom</li>
                                <li>Telephone</li>
                                <li>Wi-Fi</li>
                                <li>TV</li>
                                <li>Makan</li>
                            </ul>
                            <p class="text-center">Harga hanya</p>
                            <h3 class="text-center">Rp. 1.000.000</h3>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#order-now" class="btn btn-primary w-100">Order Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main End -->

        <!-- Order -->
        <div class="row-sm-4 pt-5 pb-5 bg-primary order">
            <div class="h-100 text-center">
                <h2 class="text-center mt-5 mb-5 text-light">Dapatkan Discount <span class="fs-2 fw-bold text-dark">10%</span> jika memesan kamar lebih dari 3 hari</h2>
                <button type="button" class="btn btn-light fs-4 text-primary fw-bold"><a href="pesan_kamar.php"  id="order-now">Pesan Sekarang Juga</a></button>
            </div>
        </div>
        <!-- Order End -->
        
        <!-- Footer -->
        <footer class="row-sm-4 pt-5 foo bg-dark text-light" id="about">
            <div class="row g-0 pt-5 pb-5">
                <div class="col-sm-6 gx-5 about">
                    <span class="fw-bold">Tentang Kami</span><br>
                    Nuansa Bali Hotel Anyer - Hotel Bintang 3 dengan pelayanan dan service setara dengan bindang 5, kami memiliki 3 pilihan kamar  yang bisa anda pilih. Rasakan sensasi pulau dewata hanya dengan 2,5 jam berkendara dari Jakarta. Hamparan pasir putih tanpa karang siap menyambut kehadiran Anda di Hotel Nuansa Bali.
                </div>
                <div class="col-sm-6 gx-5 contact">
                    <span class="fw-bold">Kontak & Informasi</span><br>
                    <ul class="info-list">
                        <li>Email: nuansabalianyer@mail.com</li>
                        <li>Phone: 0254-123456</li>
                        <li>Alamat: Jl. Raya Karang Bolong No.KM 133.5, Bandulu, Kec. Anyar, Kota Cilegon, Banten 42166</li>
                    </ul>
                </div>
            </div>
            <div class="text-center pt-5 pb-2">Created with 💖 By Ramadhika Rizky</div>
        </footer>
        <!-- Footer End -->
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>