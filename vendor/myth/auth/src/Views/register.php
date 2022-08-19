<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<section class="vh-100" style="background-color: #5AC2F0;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                    <span class=" m-4 p-4 card-title text-center center"><img src="\img\signinupor\logo.png" class="img-fluid" alt="" srcset=""></span>
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" style="color: skyblue;">REGISTRATION</p>
                                <hr>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                </div>

                                <form action="/register" method="post" enctype="multipart/form-data">
                                    <?= csrf_field() ?>

                                    <div class="form-group">
                                        <label for="email"><?= lang('Auth.email') ?></label>
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="username"><?= lang('Auth.username') ?></label>
                                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                    </div>
                                    <!-- 
    <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control <?php if (session('errors.name')) : ?>is-invalid<?php endif ?>" name="name" placeholder="Nama Lengkap" value="">
    </div> -->

                                    <div class="form-group">
                                        <label for="password"><?= lang('Auth.password') ?></label>
                                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                    </div>
                                    <!-- 
    <div class="form-group">
        <label for="avatar">Nama Lengkap</label>
        <input type="file" class="form-control <?php if (session('errors.avatar')) : ?>is-invalid<?php endif ?>" name="avatar">
    </div> -->

                                    <br>

                                    <button type="submit" class="btn btn-block" style="color: white; background-color:#5AC2F0"><?= lang('Auth.register') ?></button>
                                </form>
                                <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 mt-4">

                                <img src="\img\lab-img\lab-robotika.png" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>