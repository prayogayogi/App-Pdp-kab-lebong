<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<?= $this->session->flashdata('status'); ?>
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('DashboardController') ?>">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h5>Jumlah penduduk</h5>
							<h4 class="font-weight-bold"><?= $dataPenduduk; ?></h4>
						</div>

						<!-- <div class="icon">
              <i class="ion ion-bag"></i>
            </div> -->

						<a href="<?= base_url('DataPendudukController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-success">
						<div class="inner">
							<h5>Kartu keluarga</h5>

							<h4 class="font-weight-bold"><?= $dataKartuKeluarga; ?></h4>
						</div>

						<!-- <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div> -->

						<a href="<?= base_url('DataKkController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-warning">
						<div class="inner">
							<h5>Laki-laki</h5>

							<h4 class="font-weight-bold"><?= $dataLakilaki; ?></h4>
						</div>

						<!-- <div class="icon">
              <i class="fas fa-mars"></i>
            </div> -->

						<a href="<?= base_url('DataPendudukController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-danger">
						<div class="inner">
							<h5>Perempuan</h5>

							<h4 class="font-weight-bold"><?= $dataPerempuan; ?></h4>
						</div>

						<!-- <div class="icon">
              <i class="fas fa-venus"></i>
            </div> -->

						<a href="<?= base_url('DataPendudukController') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h5>Lahir</h5>

							<h4 class="font-weight-bold"><?= $dataLahir; ?></h4>
						</div>

						<!-- <div class="icon">
              <i class="ion ion-bag"></i>
            </div> -->

						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-success">
						<div class="inner">
							<h5>Meniggal</h5>

							<h4 class="font-weight-bold"><?= $dataMeninggal; ?></h4>
						</div>

						<!-- <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div> -->

						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-warning">
						<div class="inner">
							<h5>Pendatang</h5>

							<h4 class="font-weight-bold"><?= $dataPendatang; ?></h4>
						</div>

						<!-- <div class="icon">
              <i class="ion ion-person-add"></i>
            </div> -->

						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="small-box bg-danger">
						<div class="inner">
							<h5>Pindah</h5>

							<h4 class="font-weight-bold"><?= $dataPindah; ?></h4>
						</div>

						<!-- <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div> -->

						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header ">
							<h3 class="card-title font-weight-bold">Data penduduk</h3>
						</div>
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Nik</th>
										<th>Nkk</th>
										<th>Ekonomi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($penduduk as $data) : ?>
										<tr>
											<td class="text-center"><?= $no++ ?></td>
											<td><?= $data['nama']; ?></td>
											<td><?= $data['alamat']; ?></td>
											<td><?= $data['no_nik']; ?></td>
											<td><?= $data['no_kk']; ?></td>
											<td><?= $data['status']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
