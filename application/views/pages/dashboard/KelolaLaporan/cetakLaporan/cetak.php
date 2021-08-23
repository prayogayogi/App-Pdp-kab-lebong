<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title> <?= $title; ?> </title>

	<!-- Favicons -->
	<link href="<?= base_url('assets/assetGambar/favicon.png') ?>" rel="icon">
</head>

<body>
	<section class="print">
		<div class="container">
			<div class="row mt-5">
				<div class="col col-2">
					<img src="<?= base_url(); ?>assets/assetGambar/logoKabupatenLebong.png" alt="mukomuko" style="width: 150px; height:150px; margin-top:25px">
				</div>
				<div class="col col-8 mt-5 text-center">
					<h3 class="text-uppercase font-weight-bold">pemerintah kabupaten lebong</h3>
					<h2 class="text-uppercase font-weight-bold">kecamatan amen</h2>
					<p>Jln. Raya Pangeran Zainul Abidin Kode Pos 39164</p>
				</div>
			</div>
			<div class="bor font-weight-bold">
				<hr class="font-weight-bold">
			</div>
			<h5 class="text-center font-weight-bold mt-4">DATA PENDUDUK</h5>
			<h5 class="text-center font-weight-bold mb-3"><?= $tahun ?></h5>
		</div>
	</section>

	<section class="table">
		<div class="container">
			<div class="row">
				<div class="col">
					<table class="table table-sm table-bordered">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th>Nama Desa</th>
								<th>Penduduk</th>
								<th>KK</th>
								<th>Lahir(L)</th>
								<th>Lahir(P)</th>
								<th>Mati(L)</th>
								<th>Mati(P)</th>
								<th>Datang(L)</th>
								<th>Datang(P)</th>
								<th>Pindah(L)</th>
								<th>Pindah(P)</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<th scope="row">1</th>
								<td>SUNGAI GERONG</td>
								<td><?= $numSungaiSerongDataPenduduk; ?></td>
								<td><?= $numSungaiSerongDesa; ?></td>
								<td><?= $numSungaiSerongLahirLakilaki; ?></td>
								<td><?= $numSungaiSerongLahirPerempuan; ?></td>
								<td><?= $numSungaiSerongMatiLakilaki; ?></td>
								<td><?= $numSungaiSerongMatiPerempuan; ?></td>
								<td><?= $numSungaiSerongDatangLakilaki; ?></td>
								<td><?= $numSungaiSerongDatangPerempuan; ?></td>
								<td><?= $numSungaiSerongPindahLakilaki; ?></td>
								<td><?= $numSungaiSerongPindahPerempuan; ?></td>
								<td class="font-weight-bold"><?= $jumlahSungaiSerong = $numSungaiSerongDataPenduduk + $numSungaiSerongDesa + $numSungaiSerongLahirLakilaki + $numSungaiSerongLahirPerempuan + $numSungaiSerongMatiLakilaki + $numSungaiSerongMatiPerempuan + $numSungaiSerongDatangLakilaki + $numSungaiSerongDatangPerempuan + $numSungaiSerongPindahLakilaki + $numSungaiSerongPindahPerempuan; ?></td>
							</tr>

							<tr>
								<th scope="row">2</th>
								<td>SELEBAR JAYA</td>
								<td><?= $numSelebarDataPenduduk; ?></td>
								<td><?= $numSelebarDesa; ?></td>
								<td><?= $numSelebarLahirLakilaki; ?></td>
								<td><?= $numSelebarLahirPerempuan; ?></td>
								<td><?= $numSelebarMatiLakilaki; ?></td>
								<td><?= $numSelebarMatiPerempuan; ?></td>
								<td><?= $numSelebarDatangLakilaki; ?></td>
								<td><?= $numSelebarDatangPerempuan; ?></td>
								<td><?= $numSelebarPindahLakilaki; ?></td>
								<td><?= $numSelebarPindahPerempuan; ?></td>
								<td class="font-weight-bold"><?= $jumlahSelebar = $numSelebarDataPenduduk + $numSelebarDesa + $numSelebarLahirLakilaki + $numSelebarLahirPerempuan + $numSelebarMatiLakilaki + $numSelebarMatiPerempuan + $numSelebarDatangLakilaki + $numSelebarDatangPerempuan + $numSelebarPindahLakilaki + $numSelebarPindahPerempuan; ?></td>
							</tr>

							<tr>
								<th scope="row">3</th>
								<td>TALANG BUNUT</td>
								<td><?= $numTalangbDataPenduduk; ?></td>
								<td><?= $numTalangbDesa; ?></td>
								<td><?= $numTalangbLahirLakilaki; ?></td>
								<td><?= $numTalangbLahirPerempuan; ?></td>
								<td><?= $numTalangbMatiLakilaki; ?></td>
								<td><?= $numTalangbMatiPerempuan; ?></td>
								<td><?= $numTalangbDatangLakilaki; ?></td>
								<td><?= $numTalangbDatangPerempuan; ?></td>
								<td><?= $numTalangbPindahLakilaki; ?></td>
								<td><?= $numTalangbPindahPerempuan; ?></td>
								<td class="font-weight-bold"><?= $jumlahTalang = $numTalangbDataPenduduk + $numTalangbDesa + $numTalangbLahirLakilaki + $numTalangbLahirPerempuan + $numTalangbMatiLakilaki + $numTalangbMatiPerempuan + $numTalangbDatangLakilaki + $numTalangbDatangPerempuan + $numTalangbPindahLakilaki + $numTalangbPindahPerempuan; ?></td>
							</tr>

							<tr>
								<th class="font-weight-bold text-center" colspan="2">Jumlah</th>
								<td class="font-weight-bold"><?= $numTalangbDataPenduduk + $numSungaiSerongDataPenduduk + $numSelebarDataPenduduk; ?></td>
								<td class="font-weight-bold"><?= $numTalangbDesa + $numSungaiSerongDesa + $numSelebarDesa; ?></td>
								<td class="font-weight-bold"><?= $numTalangbLahirLakilaki + $numSungaiSerongLahirLakilaki + $numSelebarLahirLakilaki; ?></td>
								<td class="font-weight-bold"><?= $numTalangbLahirPerempuan +  $numSungaiSerongLahirPerempuan + $numSelebarLahirPerempuan; ?></td>
								<td class="font-weight-bold"><?= $numTalangbMatiLakilaki + $numSungaiSerongMatiLakilaki + $numSelebarMatiLakilaki; ?></td>
								<td class="font-weight-bold"><?= $numTalangbMatiPerempuan + $numSungaiSerongMatiPerempuan + $numSelebarMatiPerempuan; ?></td>
								<td class="font-weight-bold"><?= $numTalangbDatangLakilaki + $numSungaiSerongDatangLakilaki + $numSelebarDatangLakilaki; ?></td>
								<td class="font-weight-bold"><?= $numTalangbDatangPerempuan + $numSungaiSerongDatangPerempuan + $numSelebarDatangPerempuan; ?></td>
								<td class="font-weight-bold"><?= $numTalangbPindahLakilaki + $numSungaiSerongPindahLakilaki + $numSelebarPindahLakilaki; ?></td>
								<td class="font-weight-bold"><?= $numTalangbPindahPerempuan + $numSungaiSerongPindahPerempuan + $numSelebarPindahPerempuan; ?></td>
								<td class="font-weight-bold"><?= $jumlahSungaiSerong + $jumlahSelebar + $jumlahTalang  ?></td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>


	<section class="ttd">
		<div class="container">
			<div class="row">
				<div class="col">
					<p class="d-flex justify-content-end font-weight-bold" style="margin-top: 80px;">Rejang Lebong,
						<?= date('d, F, Y'); ?>
					</p>
					<p class="d-flex justify-content-end font-weight-bold" style="margin-top: -15px;margin-right:45px;">Petugas</p>
					<p class="d-flex justify-content-end font-weight-bold underline" style="margin-top: 60px;margin-right:35px;"><?= $userLogin['nama']; ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Untuk Print File -->
	<script>
		window.print();
	</script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
