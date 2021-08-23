<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<?= $this->session->flashdata('status'); ?>
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Laporan Data Pendatang </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Laporan Data Pendatang </li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Laporan Data Pendatang </h3>
							<div class="status mt-5">
								<?= $this->session->flashdata('status'); ?>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-header">
											<form action="<?= base_url('Laporan/CetakLaporanController') ?>" method="POST">
												<button type="submit" class="btn btn-primary"><i class="fa fa-print mr-2"></i>Cetak Laporan</button>
										</div>
										<div class="row">
											<div class="col">
												<div class="card-body">
													<div class="row">
														<div class="col">
															<div class="row">
																<div class="col">
																	<div class="form-group">
																		<label for="no_kk">Tahun Laporan Cetak</label>
																		<select class="custom-select form-control" name="tahun">
																			<option value="<?= date('Y') ?>">-- Tahun --</option>
																			<?php foreach ($laporan as $row) : ?>
																				<option value="<?= $row['tahun'] ?>"><?= $row['tahun'] ?></option>
																			<?php endforeach; ?>
																		</select>
																	</div>
																	</form>
																</div>
																<div class="col">
																	<div class="card">
																		<div class="card-header">
																			<h4>Data Penduduk</h4>
																		</div>
																		<div class="card-body">
																			<div class="buttons">
																				<p>Jumalah Data Penduduk <?= date("Y"); ?></p>
																				<button type="button" class="btn btn-primary">
																					Data Penduduk<span class="badge bg-transparent">
																						<h5 class="pl-2"><?= $dataPenduduk; ?></h5>
																					</span>
																				</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
</div>
</section>
</div>
