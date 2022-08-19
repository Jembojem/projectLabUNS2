<?= $this->include('layout/header'); ?>
<link rel="stylesheet" href="/css/login.css">

<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="/user/login" id="formLogin" method="POST">

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Logo</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                    <div class="form-outline mb-4">
                                        <input type="email" name='email' id="form2Example17" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Email address</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button id="authLogin" class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                    </div>

                                    <a class="small text-muted" href="#!">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!" style="color: #393f81;">Register here</a></p>
                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEW
<section id="login">
    <div class="row">
        <div class="col col-12 col-xl-5">
            <div class="login-logo">
                <div class="logo-wrapper"></div>
                <h1>Nge-Lab</h1>
            </div>
            <h2>#1 Laboratorium IT Universitas Terbaik di Indonesia</h2>
            <img src="/img/signinupor/img-in.png">
        </div>
        <div class="col col-12 col-xl-7">
            <div class="btn-wrapper">
                <button>Sign In</button>
                <button>Sign Up</button>
            </div>
            <form action="">
                <div style="margin-bottom: 80px;">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-1">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control">
                </div>
                <span>
                    <i class="bi bi-x-circle" style="width: 25px;"></i>
                    Password anda salah
                </span>
                <div class="row login-form-middle">
                    <div class="form-check col-12 col-md-6">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="align-self-center col-12 col-md-6">Forgot your password?</a>
                </div>

                <button class="btn-login-prim">Sign In</button>
            </form>
            <div class="login-footer">
                <div class="continue d-flex">
                    <hr width="30%">
                    <span class="px-3">or continue with</span>
                    <hr width="30%">
                </div>
                <div class="login-sosmed">
                    <a href="#">
                        <img src="/img/signinupor/google.png" width="40px" class="img-footer">
                        <span>Google</span>
                    </a>
                    <a href="#">
                        <img src="/img/signinupor/facebook.png" width="40px" class="img-footer">
                        <span>Facebook</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->



<script>
    $(document).ready(function() {
        $('#formLogin').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(resp) {
                    console.log(resp);
                    var data = JSON.parse(resp);
                    Swal.fire({
                        icon: data['icon'],
                        title: data['title'],
                        text: data['text'],
                        showConfirmButton: false,
                        timer: 2000
                    });
                    if (data['login']) {
                        location.href = "/panel";
                    }
                }
            });
        });
    });
</script>