<?= $this->include('layout/header'); ?>
<link rel="stylesheet" href="/css/layout_user.css">
<link rel="stylesheet" href="/css/otp.css">

<div class="container-fluid layout-user">
    <div class="row">
        <div class="col col-12 col-xl-5">
            <div class="user-logo">
                <div class="logo-wrapper"></div>
                <h1>Nge-Lab</h1>
            </div>
            <h2>#1 Laboratorium IT Universitas Terbaik di Indonesia</h2>
            <img src="/img/signinupor/img-otp.png">
        </div>
        <div class="col col-12 col-xl-7">
            <?= $this->renderSection('otp'); ?>
        </div>
    </div>
</div>