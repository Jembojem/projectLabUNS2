<?= $this->extend('layout\layout_user'); ?>

<?= $this->section('otp') ?>
<!-- <link rel="stylesheet" href="/css/otp.css"> -->
    
    <!-- OTP BELUM DIKIRIM -->
    <p>Masukkan kode verifikasi yang telah dikirimkan ke</p>
    <a href="#">user1@gmail.com</a>
    <form action="">
        <div style="margin-bottom: 20px;">
            <label for="otp" class="form-label">Masukkan kode</label>
            <input type="text" class="form-control" id="otp">
        </div>
        <span>
            <i class="bi bi-x-circle" style="width: 25px;"></i>
            Password anda salah
        </span>
        <button class="btn-user-prim">Sign In</button>
        <button class="btn-user-sec">
            Resend OTP
            <i class="bi bi-arrow-counterclockwise"></i>
        </button>
    </form>

    <!-- OTP SUDAH DIKIRIM -->
    <!-- <p>Masukkan kode verifikasi yang telah dikirimkan ke</p>
    <a href="#">user1@gmail.com</a>
    <button class="btn-user-prim">Sign In</button>
    <button class="btn-user-sec">
        Resend OTP
        <i class="bi bi-arrow-counterclockwise"></i>
    </button> -->
    

<?= $this->endSection() ?>