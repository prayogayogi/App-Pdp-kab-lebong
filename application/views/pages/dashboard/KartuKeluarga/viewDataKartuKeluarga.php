<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<?= $this->session->flashdata('status'); ?>
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Kartu Keluarga</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Data Kartu Keluarga</li>
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
							<h3 class="card-title">Table Data Kartu Keluarga</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-header">
											<a href="#" data-toggle="modal" data-target="#exampleModalDataKartuKeluarga" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
										</div>
										<div class="card-body">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th class="text-center">No</th>
														<th>Nama</th>
														<th>No KK</th>
														<th class="text-center">Anggota</th>
														<th class="text-center">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($getDataKk as $data) : ?>
														<tr>
															<td class="text-center"><?= $no++; ?></td>
															<td><?= $data['nama_kk']; ?></td>
															<td><?= $data['no_kk']; ?></td>
															<td class="text-center">
																<a href="<?= base_url('DataKkController/ViewAnggotaKeluarga/') . $data['no_kk'] ?>" class="btn btn-warning"><i class="fas fa-users px-3"></i></a>
															</td>
															<td class="text-center">
																<a href="#" data-toggle="modal" data-target="#ubahDataKartuKeluarga<?= $data['no_kk'] ?>" class="btn btn-primary"><i class="fas fa-pen-square"></i></a>

																<!-- <a type="submit" href="<?= base_url('DataKkController/destroyKartuKeluarga/') . $data['no_kk'] ?>" onclick=" return confirm('Yakin Ingin Menghapus.?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a> -->
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


<!-- Modal Untuk Tambah Data Kartu Keluarga-->
<div class="modal fade" id="exampleModalDataKartuKeluarga" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Kartu Keluarga</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col">
						<form action="<?= base_url('DataKkController/storeKartuKeluarga') ?>" method="POST">
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
										<label for="nama">Nama Kepala Keluarga</label>
										<input type="text" name="nama_kk" class="form-control" id="nama" placeholder="Masukan Nama">
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

<!-- Modal Untuk Update Data Kartu Keluarga -->
<?php foreach ($getDataKk as $data) : ?>
	<div class="modal fade" id="ubahDataKartuKeluarga<?= $data['no_kk'] ?>" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ubah Data Kartu Keluarga</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<form action="<?= base_url('DataKkController/updateKartuKeluarga/') . $data['no_nik'] ?>" method="POST">
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="no_kk">No Kartu Keluarga</label>
											<input type="number" disabled name="no_kk" class="form-control" id="no_kk" value="<?= $data['no_kk'] ?>" autofocus>
										</div>
										<div class="form-group">
											<label for="no_nik">No Induk Keluarga</label>
											<input type="number" name="no_nik" class="form-control" id="no_nik" value="<?= $data['no_nik'] ?>">
										</div>
										<div class="form-group">
											<label for="nama">Nama Kepala Keluarga</label>
											<input type="text" name="nama_kk" class="form-control" id="nama" value="<?= $data['nama_kk'] ?>">
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
