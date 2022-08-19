<?= $this->extend('layout/layout_landing'); ?>
<?= $this->section('content') ?>

<link rel="stylesheet" href="/css/fasilitas3-style.css">

<!-- HERO SECTION -->
<section id="fasilitas3-hero">
    <img src="\img\fasilitas3\pexels-dmitry-demidov-3784566 1.png" alt="">
    <div class="f3-hero-text text-center">
        <a href="#" class="d-flex justify-content-center">
            <img src="/img/fasilitas3/logo-uns.png">
            <h2>Nge-Lab</h2>
        </a>
        <h1>Laboratorium Multimedia</h1>
        <p>Perfect workspace and laboratory solutions for your multimedia learning</p>
        <button><a href="/panel/reservasi">Reserve</a> </button>
    </div>
</section>

<!-- ALBUM SECTION -->
<section id="fasilitas3-album">
    <div class="row">
        <div class="col col-12 col-xl-7">
            <img src="/img/fasilitas3/album-1.png" alt="">
        </div>
        <div class="col col-12 col-xl-4 offset-xl-1">
            <h2>Recording Class Equipment</h2>
            <p>Dapatkan peralatan dan software recording kelas profesional. Siap memberikan anda pengalaman yang profesional ketika anda belajar atau bekerja</p>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-xl-7 order-xl-2 offset-xl-1">
            <img src="/img/fasilitas3/album-2.png" alt="">
        </div>
        <div class="col col-12 col-xl-4">
            <h2>Recording Class Equipment</h2>
            <p>Dapatkan peralatan dan software recording kelas profesional. Siap memberikan anda pengalaman yang profesional ketika anda belajar atau bekerja</p>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-xl-7">
            <img src="/img/fasilitas3/album-3.png" alt="">
        </div>
        <div class="col col-12 col-xl-4 offset-xl-1">
            <h2>Recording Class Equipment</h2>
            <p>Dapatkan peralatan dan software recording kelas profesional. Siap memberikan anda pengalaman yang profesional ketika anda belajar atau bekerja</p>
        </div>
    </div>

</section>

<!-- LIST CONTENT -->
<section id="fasilitas3-list">
    <h1>Software and Hardware Equipment List</h1>
    <div class="row row-cols-1">
        <div class="col col-xl-5">
            <img src="/img/fasilitas3/list-1.png" alt="">
        </div>
        <div class="col col-xl-7">
            <ul>
                <li>1x 128 channel digital mixer</li>
                <li>4x 32 channel digital mixer</li>
                <li>10x10 accoustic room</li>
                <li>Profesional Software Recording</li>
            </ul>
        </div>
    </div>
    <div class="row row-cols-1">
        <div class="col col-xl-5 order-xl-2">
            <img src="/img/fasilitas3/list-2.png" alt="">
        </div>
        <div class="col col-xl-7">
            <ul>
                <li>1x 128 channel digital mixer</li>
                <li>4x 32 channel digital mixer</li>
                <li>10x10 accoustic room</li>
                <li>Profesional Software Recording</li>
            </ul>
        </div>
    </div>
</section>

<!-- PARTNER CONTENT -->
<section id="fasilitas3-partner">
    <h1>Partner</h1>
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-1 g-5">
            <div class="col align-self-center text-center">
                <img src="/img/fasilitas/partners/1.png" alt="">
            </div>
            <div class="col align-self-center text-center">
                <img src="/img/fasilitas/partners/2.png" alt="">
            </div>
            <div class="col align-self-center text-center">
                <img src="/img/fasilitas/partners/3.png" alt="">
            </div>
            <div class="col align-self-center text-center">
                <img src="/img/fasilitas/partners/4.png" alt="">
            </div>
            <div class="col align-self-center text-center">
                <img src="/img/fasilitas/partners/5.png" alt="">
            </div>
            <div class="col align-self-center text-center">
                <img src="/img/fasilitas/partners/6.png" alt="">
            </div>
            <div class="col align-self-center text-center">
                <img src="/img/fasilitas/partners/7.png" alt="">
            </div>
            <div class="col align-self-center text-center">
                <img src="/img/fasilitas/partners/8.png" alt="">
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>