<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="/css/login.css">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/images/logo-icon.png">
	<title>Login</title>
</head>

<body style="background-color: #5AC2F0;">
	<section class="vh-100">
		<div class="container h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-xl-10">
					<div class="card" style="border-radius: 1rem;">
						<div class="row g-0">
							<div class="col-md-6 col-lg-5 d-none d-md-block">
								<div class="container p-3 m-4">
									<h3>#1 Laboratorium IT Universitas Terbaik di Indonesia</h3>
								</div>
								<img src="\img\signinupor\uns-2.png" width="80%" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
							</div>
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">

									<?= view('Myth\Auth\Views\_message_block') ?>

									<form action="<?= route_to('login') ?>" method="post">
										<?= csrf_field() ?>
										<div class="d-flex align-items-center mb-3 pb-1 text-center">
											<span class="h1 fw-bold mb-0"><img src="\img\signinupor\logo.png" class="img-fluid" alt="" srcset=""></span>
										</div>

										<!-- <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5> -->


										<?php if ($config->validFields === ['email']) : ?>
											<div class="form-group">
												<label class="form-label" for="login"><?= lang('Auth.email') ?></label>
												<input type="email" class="form-control form-control-lg <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
												<div class="invalid-feedback">
													<?= session('errors.login') ?>
												</div>
											</div>
										<?php else : ?>
											<div class="form-group">
												<label class="form-label" for="login"><?= lang('Auth.emailOrUsername') ?></label>
												<input type="text" class="form-control form-control-lg <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
												<div class="invalid-feedback">
													<?= session('errors.login') ?>
												</div>
											</div>
										<?php endif; ?>
										<br>
										<div class="form-group">
											<label class="form-label" for="password"><?= lang('Auth.password') ?></label>
											<input type="password" name="password" class="form-control form-control-lg  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
											<div class="invalid-feedback">
												<?= session('errors.password') ?>
											</div>
										</div>
										<br>
										<?php if ($config->allowRemembering) : ?>
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
													<?= lang('Auth.rememberMe') ?>
												</label>
											</div>
										<?php endif; ?>

										<br>
										<div class="row">
											
												<button id="authLogin" class=" col-12 btn btn-dark btn-lg btn-block" type="submit" ><?= lang('Auth.loginAction') ?></button>

										</div>

									</form>
									<hr>

									<?php if ($config->activeResetter) : ?>
										<a class="small text-muted" style="text-decoration: none;" href="<?= route_to('forgot') ?>">Lupa Password ?</a>
									<?php endif; ?>

									<?php if ($config->allowRegistration) : ?>
										<p class="mb-5 pb-lg-2" style="color: black">Belum memiliki akun? <a href="<?= route_to('register') ?>" style="color: black; text-decoration: none;">Daftar Disini</a></p>
									<?php endif; ?>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


</body>

</html>