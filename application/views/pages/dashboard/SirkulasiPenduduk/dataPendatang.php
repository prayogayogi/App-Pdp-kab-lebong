<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<?= $this->session->flashdata('status'); ?>
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Pendatang</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Pendatang</li>
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
							<h3 class="card-title">Table Data Pendatang</h3>
							<!-- <div class="status mt-5">
								<?= $this->session->flashdata('status'); ?>
							</div> -->
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-header">
											<a href="#" data-toggle="modal" data-target="#exampleModalStoreDataPendatang" class="btn btn-primary"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
										</div>
										<div class="card-body">
											<table id="example1" class="table  table-bordered table-striped">
												<thead>
													<tr>
														<th class="text-center">No</th>
														<th>Nama</th>
														<th>Alamat</th>
														<th>Nik</th>
														<th>Ekonomi</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getDataPendatang as $data) : ?>
														<tr>
															<td class="text-center"><?= $no++ ?></td>
															<td><?= $data['nama']; ?></td>
															<td><?= $data['alamat']; ?></td>
															<td><?= $data['no_nik']; ?></td>
															<td><?= $data['status']; ?></td>
															<td class="text-center">
																<a href="#" data-toggle="modal" data-target="#modalUpdateDataPendatang<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

																<a href="#" data-toggle="modal" data-target="#staticBackdrop<?= $data['id'] ?>" class="btn btn-info"><i class="fas fa-plus-square"></i></a>
															</td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
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


<!-- Modal Untuk Tambah Data Pendatang -->
<div class="modal fade" id="exampleModalStoreDataPendatang" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Pendatang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<form action="<?= base_url('Sirkulasi/DataPendatangController/storeDataPendatang') ?>" method="POST">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="no_kk">No Kartu Keluarga</label>
										<input type="number" name="no_kk" class="form-control" id="no_kk" placeholder="Masukan No Kk" autofocus>
									</div>
									<div class="form-group">
										<label for="no_nik">No Induk Keluarga</label>
										<input type="number" name="no_nik" class="form-control" id="no_nik" placeholder="Masukan No Nik">
									</div>
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
									</div>
									<div class="form-group">
										<label for="tempat_tgl">Tempat Tanggal Lahir</label>
										<input type="text" name="tempat_tgl" class="form-control" id="tempat_tgl" placeholder="Masukan Tempat Tgl Lahir">
									</div>
									<div class="form-group">
										<label for="tgl_lahir">Tanggal Lahir</label>
										<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Masukan Tgl Lahir">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="jenis_kelamin">Jenis Kelamin</label>
										<select class="custom-select" name="jenis_kelamin" id="jenis_kelamin">
											<option selected>-- Jenis Kelamin --</option>
											<option value="LAKI-LAKI">Laki-laki</option>
											<option value="PEREMPUAN">Perempuan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="status_keluarga">Setatus Di Keluarga</label>
										<select class="custom-select" name="status_keluarga" id="status_keluarga">
											<option selected>-- Setatus Di Keluarga --</option>
											<option value="KEPALA KELUARGA">Kepala Keluarga</option>
											<option value="IBU">Ibu</option>
											<option value="ANAK">Anak</option>
										</select>
									</div>
									<div class="form-group">
										<label for="alamat">Alamat</label>
										<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat">
									</div>
									<div class="form-group">
										<label for="pekerjaan">Pekerjaan</label>
										<select class="custom-select" name="pekerjaan" id="pekerjaan">
											<option selected>-- Jenis Pekerjaan --</option>
											<?php foreach ($pekerjaan as $data) : ?>
												<option value="<?= $data['pekerjaan']; ?>"><?= $data['pekerjaan']; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary mt-2">Simpan</button>

							<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Untuk Ubah Data Pendatang -->
<?php foreach ($getDataPendatang as $data) : ?>
	<div class="modal fade" id="modalUpdateDataPendatang<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Pendatang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<form action="<?= base_url('Sirkulasi/DataPendatangController/updateDataPendatang/') . $data['no_nik'] ?>" method="POST">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="no_kk">No Kartu Keluarga</label>
											<input type="number" name="no_kk" class="form-control" id="no_kk" value="<?= $data['no_kk'] ?>" autofocus>
										</div>
										<div class="form-group">
											<label for="no_nik">No Induk Keluarga</label>
											<input type="number" name="no_nik" class="form-control" id="no_nik" value="<?= $data['no_nik'] ?>">
										</div>
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" name="nama" class="form-control" id="nama" value="<?= $data['nama'] ?>">
										</div>
										<div class="form-group">
											<label for="tempat_tgl">Tempat Tanggal Lahir</label>
											<input type="text" name="tempat_tgl" class="form-control" id="tempat_tgl" value="<?= $data['tempat_tgl_lahir'] ?>">
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label for="tgl_lahir">Tanggal Lahir</label>
											<input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $data['tgl_lahir'] ?>">
										</div>
										<div class="form-group">
											<label for="alamat">Alamat</label>
											<input type="text" name="alamat" class="form-control" id="alamat" value="<?= $data['alamat'] ?>">
										</div>
										<div class="form-group">
											<label for="pekerjaan">Pekerjaan</label>
											<input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?= $data['pekerjaan'] ?>">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary mt-2">Simpan</button>
								<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>


<!-- Modal Unutk Detail Data Pendatang -->
<?php foreach ($getDataPendatang as $data) : ?>
	<div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Detail Data Pendatang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<!-- <div class="row">
							<div class="col text-center mb-4">
								<img src="<?= base_url('assets') ?>/dist/img/default.jpg" width="120px" alt="">
							</div>
						</div> -->
						<dl class="row justify-content-center">
							<dt class="col-sm-6">Nama</dt>
							<dd class="col-sm-6">: <?= $data['nama']; ?></dd>
							<dt class="col-sm-6">Alamat</dt>
							<dd class="col-sm-6">: <?= $data['alamat']; ?></dd>
							<dt class="col-sm-6">Nama Desa</dt>
							<dd class="col-sm-6">: <?= $data['alamat']; ?></dd>
							<dt class="col-sm-6">Jenis Kelamin</dt>
							<dd class="col-sm-6">: <?= $data['jenis_kelamin']; ?></dd>
							<dt class="col-sm-6">No Nik</dt>
							<dd class="col-sm-6">: <?= $data['no_nik']; ?></dd>
							<dt class="col-sm-6">No Kk</dt>
							<dd class="col-sm-6">: <?= $data['no_kk']; ?></dd>
							<dt class="col-sm-6">Pekerjaan</dt>
							<dd class="col-sm-6">: <?= $data['pekerjaan']; ?></dd>
							<dt class="col-sm-6">Data Masuk</dt>
							<dd class="col-sm-6">: <?= $data['tgl_masuk']; ?></dd>
						</dl>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn px-3 ml-2 btn-dark" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
