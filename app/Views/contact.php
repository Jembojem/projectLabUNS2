<?= $this->extend('layout/layout_landing'); ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="/css/contact.css">

<!-- HERO SECTION -->
<section id="contact-hero" data-aos="zoom-out-down" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
    <div class="contact-hero-text">
        <h1>CONTACT INFORMATION</h1>
        <p>Jika anda mempunyai pertanyaan, jangan sungkan untuk menghubungi kami</p>
    </div>
    <div class="contact-hero-card row justify-content-center">
        <div class="col col-12 col-lg-4">
            <div class="card hvr-outline-out">
                <img src="/img/contact/phone.png" alt="">
                <a href="#">Call us</a>
                <p>0273 - 46112</p>
                <p>0273 - 461468</p>
            </div>
        </div>
        <div class="col col-12 col-lg-4">
            <div class="card hvr-outline-out">
                <img src="/img/contact/phone.png" alt="">
                <a href="#">Call us</a>
                <p>0273 - 46112</p>
                <p>0273 - 461468</p>
            </div>
        </div>
        <div class="col col-12 col-lg-4">
            <div class="card hvr-outline-out">
                <img src="/img/contact/phone.png" alt="">
                <a href="#">Call us</a>
                <p>0273 - 46112</p>
                <p>0273 - 461468</p>
            </div>
        </div>
    </div>
</section>

<!-- LOCATION SECTION -->
<section id="contact-location" data-aos="zoom-out-down" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
    <div class="row">
        <div class="col col-12 col-lg-6">
            <button>
                SHOW ON GMAPS
                <i class="bi bi-arrow-right-short"></i>
            </button>
        </div>
        <div class="col col-12 col-lg-6">
            <h2>Ingin memberikan masukan kepada kami?</h2>
            <form action="">
                <!-- FORM -->
                <div class="form-floating mb-5">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email anda</label>
                </div>
                <div class="form-floating mb-5">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 245px"></textarea>
                    <label for="floatingTextarea2">Pesan, kritik, atau saran anda</label>
                </div>
                <!-- BUTTON -->
                <button>
                    Kirim
                    <i class="bi bi-arrow-right-short"></i>
                </button>
            </form>
            <p>Pesan, saran, dan masukan anda akan kami kumpulkan dan akan menjadi bahan masukan bagi institusi kami kedepannya. Kami harap masukan saran anda dapat bermanfaat bagi kenyamanan bagi seluruh pengunjung laboratorium kami. Kami ucapkan terimkasih banyak</p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>