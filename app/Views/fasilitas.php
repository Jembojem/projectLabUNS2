<?= $this->extend('layout/layout_landing'); ?>
<?= $this->section('content') ?>


<!-- Own CSS -->
<link rel="stylesheet" href="/css/fasilitas-style.css">


<!-- HERO SECTION -->
<section id="hero">
    <div class="container-fluid h-100">
        <!-- <img src="/img/fasilitas/hero.png"> -->
        <div class="hero-text">
            <h1>COMPUTER LAB A</h1>
            <p>Laboratorium dengan spek terbaik untuk memberikan kecepatan dalam bekera dan performa terbaik</p>
            <img src="/img/fasilitas/btn-reservation.png" class="img-reservation">
            <button class="btn reservation"><a href="/panel/reservasi">RESERVATION</a></button>
        </div>
    </div>
</section>

<!-- ALBUM SECTION -->
<section id="album">
    <div class="container-fluid">
        <h2 data-aos="fade-left" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">
            USE CASE</h2>
        <div class="album-masonry">
            <div class="album-card card-1" data-aos="fade-down" data-aos-duration="1000" data-aos-anchor-placement="top-center">
                <div class="row">
                    <div class="col">
                        <h3>1. ARTIFICIAL INTELLIGENCE</h3>
                        <p class="quote">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora asperiores similique quod obcaecati facilis esse assumenda dolor id temporibus"</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <img src="/img/fasilitas/ai.png" alt="" data-aos="fade-up-right" data-aos="zoom-out" data-aos-duration="2000" data-aos-anchor-placement="top-center">
                    </div>
                    <div class="col">
                        <p>Siap memberikan pengalaman belajar dan bekera dengan machine learning dan deep learning dengan cepat dan memuaskan</p>
                    </div>
                </div>
            </div>
            <div class="album-card card-2" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-top">
                <h3>2. EDITING</h3>
                <p>Dukungan GPU dan Processor terbaik memberikan kecepatan dalam proses editing dan rendering</p>
                <img src="/img/fasilitas/editing.png" alt="">
            </div>
            <div class="album-card card-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="center-bottom">
                <h3>4. DESIGN</h3>
                <p>Dukungan aplikasi 3D CAD didukung dengan kecepatan memproses gambar pada design anda</p>
                <img src="/img/fasilitas/design.png" alt="" data-aos="zoom-out-right" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
            </div>
            <div class="album-card card-4" data-aos="fade-down" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                <h3>3. 3D ANIMATION</h3>
                <p>Dengan penggunaan GPU dan CPU generasi baru pengalaman belaar dan bekerja dengan dunia 3D</p>
                <img src="/img/fasilitas/3d.png" alt="" data-aos="fade-down-left" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">
            </div>
        </div>
    </div>
</section>
<!-- SPECS SECTION -->
<section id="specs">
    <!-- <img src="/img/fasilitas/specs.png" class="img-bg"> -->
    <div class="container-fluid">
        <h2>SPECS</h2>
        <div class="list-specs d-flex">
            <ul class="me-5">
                <li>INTEL CORE I9 12900K</li>
                <li>NVIDIA GEFORCE RTX 3090Ti</li>
                <li>ASUSZ690</li>
                <li>64GB DDR4 3200 CORSAIR <br>DOMINATOR</li>
                <li>ROG Swift OLED PG2UQ</li>
                <li>SAMSUNG PRO 980 SSD</li>
            </ul>
            <ul>
                <li>ASUS ROG Thor 1200 PSU</li>
                <li>Corsair H510i Elite</li>
                <li>Logitech G730 Mouse</li>
                <li>Logitech G915 Keyboard</li>
                <li>HyperX Cloud Stinger Headset</li>
                <li>200Mbps Internet Speed</li>
            </ul>
        </div>
    </div>
    <div class="specs-img">
        <img src="/img/fasilitas/rtx.png" alt="" class="img-1">
        <img src="/img/fasilitas/intel.png" alt="" class="img-2">
    </div>
    
</section>

<!-- GALLERY SECTION -->
<section id="gallery">
    <div class="container">
        <h2>OUR LAB'S</h2>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="row py-3">
                    <img src="/img/fasilitas/lab-1.png" alt="">
                </div>
                <div class="row py-3">
                    <img src="/img/fasilitas/lab-2.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 py-3">
                <img src="/img/fasilitas/lab-3.png" alt="" style="max-width: 100%; min-height: 100%">
            </div>
        </div>
    </div>
</section>

<!-- PARTNERS SECTION -->
<section id="partners">
    <div class="container">
        <!-- <img src="/img/fasilitas/PARTNERS.png" class="img-partners"> -->
        <h2>PARTNERS</h2>
        <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 g-5">
            <div class="col"><img src="/img/fasilitas/adobe.png"></div>
            <div class="col"><img src="/img/fasilitas/microsoft.png"></div>
            <div class="col"><img src="/img/fasilitas/google.png"></div>
            <div class="col"><img src="/img/fasilitas/blender.png"></div>
            <div class="col"><img src="/img/fasilitas/maya.png"></div>
            <div class="col"><img src="/img/fasilitas/autocad.png"></div>
            <div class="col"><img src="/img/fasilitas/solidworks.png"></div>
            <div class="col"><img src="/img/fasilitas/3ds.png"></div>
            <div class="col"><img src="/img/fasilitas/unity.png"></div>
            <div class="col"><img src="/img/fasilitas/oracle.png"></div>
            <div class="col"><img src="/img/fasilitas/aws.png"></div>
            <div class="col"><img src="/img/fasilitas/telkom.png"></div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>