<body style="background-color:#2C2E43;">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center mt-3">
						<div class="col-lg-5 mt-5">
							<div class="card shadow-lg border-0 rounded-lg mt-3">
								<div class="card-header">
									<div class="col text-center">
										<h3 class="font-weight-light">Silahkan Login</h3>
										<div class="status mt-3">
											<?= $this->session->flashdata('status'); ?>
										</div>
										<img src="<?= base_url('assets/assetGambar/') ?>logoKabupatenLebong.png" alt="logoKabupatenLebong" style="width:100px;" class="mb-3">
									</div>
								</div>
								<div class="card-body">
									<form action="<?= base_url('AuthController/actionLogin') ?>" method="POST">
										<div class="form-group">
											<label class="small mb-3" for="email">UserName</label>
											<input class="form-control py-4" name="email" id="email" type="text" placeholder="Masukan User Name" autofocus value="<?= set_value('email'); ?>" />
											<?= form_error('email', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
										</div>
										<div class="form-group">
											<label class="small mb-3" for="password">Password</label>
											<input class="form-control py-4" name="password" id="password" type="password" placeholder="Masukan Password" />
											<?= form_error('password', '  <small class="text-danger  mb-3 ml-2">', '</small>') ?>
										</div>
										<div class="form-group d-flex align-items-center justify-content-end mt-5 mb-3">
											<button class="btn btn-info px-4 py-2" type="submit">Login</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets') ?>/login/scripts.js"></script>
</body>

</html>
