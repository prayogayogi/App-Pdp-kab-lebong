<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Admin</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Admin</li>
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
							<h3 class="card-title">Table Data Admin</h3>
							<div class="status mt-5">
								<?= $this->session->flashdata('status'); ?>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-header">
											<a href="#" data-toggle="modal" data-target="#exampleModalDataPenduduk" class="btn btn-primary"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
										</div>
										<div class="card-body">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th class="text-center">No</th>
														<th>Nama</th>
														<th>Alamat</th>
														<th class="text-center">Foto</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getAdmin as $data) : ?>
														<tr>
															<td class="text-center"><?= $no++ ?></td>
															<td><?= $data['nama']; ?> |
																<?php if ($data['roles'] == 1) { ?>
																	<a class="text-primary">Admin</a>
																<?php } else if ($data['roles'] == 2) { ?>
																	<a class="text-primary">Camat</a>
																<?php } else if ($data['roles'] == 3) { ?>
																	<a class="text-primary">Petugas</a>
																<?php } ?>
															</td>
															<td><?= $data['alamat']; ?></td>
															<td class="text-center">
																<img src="<?= base_url('/assets/assetGambar/administrator/') . $data['foto'] ?>" alt="administrator" width="40px">
															</td>
															<td class="text-center">
																<a href="#" data-toggle="modal" data-target="#modalUbahDataPenduduk<?= $data['id'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

																<a type="submit" href="<?= base_url('DataPendudukController/hapusDataPenduduk/') . $data['id'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

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


<!-- Modal untuk tambah data admin -->
<div class="modal fade" id="exampleModalDataPenduduk" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<?= form_open_multipart('AdministratorController/tambahDataAdmin'); ?>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" autocomplete="off" id="nama" placeholder="Masukan Nama" autofocus>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" placeholder="Masukan Email">
								</div>
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat">
								</div>
								<div class="form-group">
									<label for="jabatan">Jabatan</label>
									<select class="form-control" name="roles">
										<option value="1">-- Pilih Posisi Jabatan --</option>
										<option value="1">Admin</option>
										<option value="2">Camat</option>
										<option value="3">Petugas Desa</option>
									</select>
								</div>
								<div class="form-group">
									<label for="foto">Photo</label>
									<input type="file" name="foto" class="form-control" id="foto" placeholder="Masukan Tempat Tgl Lahir">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary mt-2">Simpan</button>
						<button type="resset" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Untuk ubah data penduduk -->
<?php foreach ($getAdmin as $data) : ?>
	<div class="modal fade" id="modalUbahDataPenduduk<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Penduduk</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<form action="<?= base_url('DataPendudukController/ubahDataPenduduk/') . $data['id'] ?>" method="POST">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" name="nama" class="form-control" id="nama" disabled value="<?= $data['nama'] ?>" autofocus>
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" name="email" autocomplete="off" class="form-control" id="email" value="<?= $data['email'] ?>">
										</div>
										<div class="form-group">
											<label for="alamat">Alamat</label>
											<input type="text" name="alamat" autocomplete="off" class="form-control" id="alamat" value="<?= $data['alamat'] ?>">
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


<!-- Modal Unutk Detail data Penduduk -->
<?php foreach ($getAdmin as $data) : ?>
	<div class="modal fade" id="staticBackdrop<?= $data['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Detail Data Admin</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="card-body">
						<div class="row">
							<div class="col text-center mb-4">
								<img src="<?= base_url('/assets/assetGambar/administrator/') . $data['foto'] ?>" width="120px" alt="" class="img-thumbnail">
							</div>
						</div>
						<dl class="row justify-content-center">
							<dt class="col-sm-6">Nama</dt>
							<dd class="col-sm-6">: <?= $data['nama']; ?></dd>
							<dt class="col-sm-6">Email</dt>
							<dd class="col-sm-6">: <?= $data['email']; ?></dd>
							<dt class="col-sm-6">Nama Desa</dt>
							<dd class="col-sm-6">: <?= $data['alamat']; ?></dd>
							<dt class="col-sm-6">Jabatan</dt>
							<dd class="col-sm-6">:
								<?php if ($data['roles'] == 1) {
									print "Admin";
								} else if ($data['roles'] == 2) {
									print "Camat";
								} else if ($data['roles'] == 3) {
									print "Petugas";
								} ?>
							</dd>
						</dl>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-dark px-4 ml-2 mt-2" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
