<?= $this->include('layout/header'); ?>
<link rel="stylesheet" href="/css/signup.css">

<!-- <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form id="formSignUp" action="/user/signup" method="POST" enctype="multipart/form-data" class="mx-1 mx-md-4">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="nama" id="formNama" class="form-control" />
                                            <label class="form-label" for="formNama">Nama Lengkap</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="username" id="formUsername" class="form-control" />
                                            <label class="form-label" for="formUsername">Username</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" id="formEmail" class="form-control" />
                                            <label class="form-label" for="formEmail">Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" id="formPassword" class="form-control" />
                                            <label class="form-label" for="formPassword">Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="retype" id="formPassword2" class="form-control" />
                                            <label class="form-label" for="formPassword2">Repeat your password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="file" name="avatar" id="formAvatar" class="form-control" />
                                            <label class="form-label" for="formAvatar">Upload Avatar</label>
                                        </div>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- NEW -->
<section id="signup">
    <div class="row">
        <div class="col col-12 col-xl-5">
            <div class="login-logo">
                <div class="logo-wrapper"></div>
                <h1>Nge-Lab</h1>
            </div>
            <h2>#1 Laboratorium IT Universitas Terbaik di Indonesia</h2>
            <img src="/img/signinupor/img-up.png">
        </div>
        <div class="col col-12 col-xl-7">
            <div class="btn-wrapper">
                <button>Sign In</button>
                <button>Sign Up</button>
            </div>
            <form action="">
                <!-- Nama -->
                <div class="form-nama">
                    <div>
                        <label class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" style="width: 80%;">
                    </div>
                    <div>
                        <label class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <!-- Username -->
                <div style="margin-bottom: 15px;">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control">
                </div>
                <span style="margin-bottom: 70px;">
                    <i class="bi bi-x-circle" style="width: 25px;"></i>
                    Username sudah digunakan
                </span>
                <!-- Email -->
                <div style="margin-bottom: 80px;">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control">
                </div>
                <!-- Password -->
                <div style="margin-bottom: 25px;">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>
                <!-- Validation -->
                <span style="margin-bottom: 5px; display:block;" class="active">
                    <i class="bi bi-check-circle" style="width: 25px;"></i>
                    Paling sedikit 8 karakter
                </span>
                <span style="margin-bottom: 5px; display:block;">
                    <i class="bi bi-x-circle" style="width: 25px;"></i>
                    Lowercase dan uppercase
                </span>
                <span style="margin-bottom: 50px; display:block;">
                    <i class="bi bi-x-circle" style="width: 25px;"></i>
                    Latest one character
                </span>
                <div style="margin-bottom: 50px;">
                    <label class="form-label">Re-Type Password</label>
                    <input type="password" class="form-control">
                </div>
                <!-- Input File -->
                <label class="form-label">Foto Profil</label>
                <div class="input-group" style="margin-bottom: 40px;">
                    <label for="fotoProfile">
                        Pilih File
                        <input type="file" class="form-control" id="fotoProfile">
                    </label>
                </div>
                <!-- Terms Section -->
                <div class="form-check" style="margin-bottom: 70px;">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        i agree all statements in
                        <a href="#">Terms of Service</a>
                    </label>
                </div>
                <!-- HREF Section -->
                <div class="signup-href" style="margin-bottom: 120px;">
                    <button class="btn-login-prim">
                        Let's Go
                        <img src="/img/signinupor/arrow-right-circle.png">
                    </button>
                    <span class="mx-5">or</span>
                    <a href="#" class="me-5"><img src="/img/signinupor/google.png"></a>
                    <a href="#"><img src="/img/signinupor/facebook.png"></a>
                </div>
            </form>

        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#formSignUp').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(resp) {
                    var dataku = JSON.parse(resp);
                    console.log(dataku);
                }
            })
        });
    });
</script>