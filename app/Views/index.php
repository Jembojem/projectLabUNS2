<?= $this->extend('layout/layout_landing'); ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="/css/landing.css">

<!-- Isi Konten -->
<img src="/img/Ellipse-1.png" class="shape-1 position-absolute start-0 top-0">
<img src="/img/Ellipse-2.png" class="shape-2 position-absolute end-0">

<!-- Hero Section -->
<section id="hero">
    <img src="/img/Rectangle 10.png" class="shape-3 position-absolute">
    <div class="container-fluid hero">
        <div class="row">
            <div class="col hero-text">
                <h1>Solusi Laboratorium IT</h1>
                <p class="mb-5">Laboratorium IT UNS yang canggih dan cepat solusi bagi segala proyek IT anda.</p>
                <button type="button" class="button-reservasi hvr-bounce-to-right">
                    <a href="">Reservasi</a>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section id="benefits">
    <div class="container benefits">
        <h2 class="text-center" data-aos="zoom-out-down" data-aos-duration="1100" data-aos-anchor-placement="top-bottom">
            OUR SUPER BENEFITS</h2>
        <h3 class="text-center" data-aos="zoom-out-down" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
            Labs Faster & Better</h3>
        <div class="row" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
            <div class="col-lg-3 col-sm-6">
                <img src="/img/ic_globe.png" alt="" width="56" height="56" class="mb-3">
                <h4>High Tech</h4>
                <p>Penggunaan fasilitas komputer dan alat laboratorium terbaru</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="/img/ic_globe2.png" alt="" width="56" height="56" class="mb-3">
                <h4>Faster and Secure</h4>
                <p>Kecepatan internet laboratorium yang cepat dan aman</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="/img/ic_globe3.png" alt="" width="56" height="56" class="mb-3">
                <h4>Lab Assistant</h4>
                <p>Assisten lab yang bersertifikat dan berpengalaman</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="/img/ic_globe4.png" alt="" width="56" height="56" class="mb-3">
                <h4>Software Valley</h4>
                <p>Beragam dukungan aplikasi yang terinstal untuk fasilitas kera anda</p>
            </div>
        </div>
    </div>
</section>

<!-- Album Section -->
<section id="album">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col" data-aos="zoom-in-up" data-aos-duration="1000">
                <img src="/img/number1.png" width="56" class="shape-number">
                <img src="/img/photo1.png" alt="" width="350">
            </div>
            <div class="col align-self-center" data-aos="fade-left" data-aos-duration="1000">
                <h3>Pilih Jadwal Nge-Labmu</h3>
                <p>Pilih jadwal Nge-labmu dimana terdapat beragam pilihan laboratorium yang sesuai kebutuhanmu</p>
                <button type="button" class="button-secondary" style="width: 150px;">
                <a href="/jadwal">Jadwal</a> 
                </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col order-1 order-md-2" data-aos="zoom-in-up" data-aos-duration="1000">
                <img src="/img/number2.png" width="56" class="shape-number">
                <img src="/img/photo2.png" alt="" width="350">
            </div>
            <div class="col order-2 order-md-1 align-self-center" data-aos="fade-right" data-aos-duration="1000">
                <h3>Reservasi Jadwal Pilihanmu</h3>
                <p>Reservasi segera adwal pilihan terbaikmu dan dapatkan kemudahan dalam membayar</p>
                <button type="button" class="button-secondary" style="width: 150px;">
                    <a href="/jadwal">Jadwal</a>
                </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col" data-aos="zoom-in-up" data-aos-duration="1000">
                <img src="/img/number3.png" width="56" class="shape-number">
                <img src="/img/photo3.png" alt="" width="350">
            </div>
            <div class="col align-self-center" data-aos="fade-left" data-aos-duration="1000">
                <h3>Enjoy Your Lab</h3>
                <p>Selamat menggunakan laboratorium anda dan nikmati beragam keunggulan yang kami berikan</p>
                <button type="button" class="button-secondary" style="width: 150px;">
                <a href="/fasilitas3">Fasilitas</a>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing">
    <div class="container-fluid">
        <h2 class="text-center" data-aos="fade-up" data-aos-duration="1000">Take Your Labs Plan</h2>
        <div class="row justify-content-evenly">
            <div class="col-12 col-xl-4" data-aos="flip-left" data-aos-duration="2000">
                <div class="card pricing mx-auto">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body p-0">
                        <h3 class="text-center">Computer Lab</h3>
                        <h4 class="text-center">100.000</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                20 High Specs Computer
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                3 Lab Assistants
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                200 Mbps Internet Speed
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                100+ Profesional Aplication
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="button-secondary pilih-lab">Pilih Lab</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4" data-aos="flip-left" data-aos-duration="2000">
                <div class="card pricing mx-auto">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body p-0">
                        <h3 class="text-center">Computer Lab</h3>
                        <h4 class="text-center">100.000</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                20 High Specs Computer
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                3 Lab Assistants
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                200 Mbps Internet Speed
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                100+ Profesional Aplication
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="button-secondary pilih-lab">Pilih Lab</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4" data-aos="flip-left" data-aos-duration="2000">
                <div class="card pricing mx-auto">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body p-0">
                        <h3 class="text-center">Computer Lab</h3>
                        <h4 class="text-center">100.000</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                20 High Specs Computer
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                3 Lab Assistants
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                200 Mbps Internet Speed
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-check-circle-fill"></i>
                                100+ Profesional Aplication
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="button-secondary pilih-lab">Pilih Lab</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Sponsor Section -->
<section id="sponsor">
    <div class="container">
        <div class="row" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
            <div class="col-12 col-md-6 col-xl-3 mb-5">
                <img src="/img/apple-11 1.png" alt="" height="30px">
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-5">
                <img src="/img/Group 13.png" alt="" height="30">
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-5">
                <img src="/img/slack-2 1.png" alt="" height="30">
            </div>
            <div class="col-12 col-md-6 col-xl-3 mb-5">
                <img src="/img/spotify-1 1.png" alt="" height="30">
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section id="testi">
    <div class="container-fluid">
        <h2 class="text-center" data-aos="fade-down" data-aos-duration="1000">Our Testimonial</h2>
        <div class="row" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-12 col-lg-4 mb-4">
                <div class="card testimonial mx-auto">
                    <div class="card-body">
                        <div class="icon-star">
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx"></i>
                        </div>
                        <p>Fasilitas Laboratorium yang lengkap dan dukungan aplikasi yang banyak</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="/img/farkhan_photo.png" alt="" width="60px">
                            </div>
                            <div class="col-8 align-middle">
                                <h4 id="testi-nama">Al-Farkhan</h4>
                                <p>UNS Students</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <div class="card testimonial mx-auto">
                    <div class="card-body">
                        <div class="icon-star">
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx"></i>
                        </div>
                        <p>Fasilitas Laboratorium yang lengkap dan dukungan aplikasi yang banyak</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="/img/farkhan_photo.png" alt="" width="60px">
                            </div>
                            <div class="col-8 align-middle">
                                <h4 id="testi-nama">Al-Farkhan</h4>
                                <p>UNS Students</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <div class="card testimonial mx-auto">
                    <div class="card-body">
                        <div class="icon-star">
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx-1"></i>
                            <i class="bi bi-star-fill mx"></i>
                        </div>
                        <p>Fasilitas Laboratorium yang lengkap dan dukungan aplikasi yang banyak</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="/img/farkhan_photo.png" alt="" width="60px">
                            </div>
                            <div class="col-8 align-middle">
                                <h4 id="testi-nama">Al-Farkhan</h4>
                                <p>UNS Students</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<?= $this->endSection() ?>