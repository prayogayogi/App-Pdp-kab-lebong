<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<?= $this->session->flashdata('status'); ?>
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Laporan Data Lahir </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Laporan Data Lahir </li>
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
							<h3 class="card-title">Laporan Data Lahir </h3>
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


<!-- Modal untuk tambah data lahir -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Lahir</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<form action="<?= base_url('DataPendudukController/tambahDataPenduduk') ?>" method="POST">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="no_kk">No Kk</label>
										<input type="number" name="no_kk" class="form-control" id="no_kk" placeholder="Masukan No Kk" autofocus>
									</div>
									<div class="form-group">
										<label for="no_nik">No Nik</label>
										<input type="number" name="no_nik" class="form-control" id="no_nik" placeholder="Masukan No Nik">
									</div>
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
									</div>
									<div class="form-group">
										<label for="tempat_tgl">Tempat Tgl Lahir</label>
										<input type="text" name="tempat_tgl" class="form-control" id="tempat_tgl" placeholder="Masukan Tempat Tgl Lahir">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="tgl_lahir">Tgl Lahir</label>
										<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Masukan Tgl Lahir">
									</div>
									<div class="form-group">
										<label for="jenis_kelamin">Jenis Kelamin</label>
										<input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin">
									</div>
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat">
									</div>
									<div class="form-group">
										<label for="pekerjaan">Pekerjaan</label>
										<input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukan Pekerjaan">
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary mt-2">Simpan</button>

							<button type="resset" class="btn btn-dark px-3 ml-2 mt-2" data-dismiss="modal">Close</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
