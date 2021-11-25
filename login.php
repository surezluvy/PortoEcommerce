<?php include 'template/header.php'; ?>
<main class="main">

			<div class="container login-container">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col-md-6">
								<div class="heading mb-1">
									<h2 class="title">Login</h2>
								</div>

								<form action="login_process.php" method="post">
									<label for="login-email">
										Username or email address
										<span class="required">*</span>
									</label>
									<input name="email" type="email" class="form-input form-wide" id="login-email" required />

									<label for="login-password">
										Password
										<span class="required">*</span>
									</label>
									<input name="password" type="password" class="form-input form-wide" id="login-password" required />

									<button type="submit" class="btn btn-dark btn-md w-100">
										LOGIN
									</button>
								</form>
							</div>
							<div class="col-md-6">
								<div class="heading mb-1">
									<h2 class="title">Register</h2>
								</div>

								<form action="register_process.php" method="post">
									<label for="login-email">
										Nama lengkap
										<span class="required">*</span>
									</label>
									<input name="name" type="text" class="form-input form-wide" id="login-email" required />
									
									<label for="login-email">
										Alamat lengkap
										<span class="required">*</span>
									</label>
									<input name="address" type="text" class="form-input form-wide" id="login-email" required />

									<label for="login-email">
										Email
										<span class="required">*</span>
									</label>
									<input name="email" type="email" class="form-input form-wide" id="login-email" required />

									<label for="login-password">
										Password
										<span class="required">*</span>
									</label>
									<input name="password" type="password" class="form-input form-wide" id="login-password" required />

									<button type="submit" class="btn btn-dark btn-md w-100">
										REGISTER
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- End .main -->
<?php include 'template/footer.php'; ?>