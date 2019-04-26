<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<?php $this->load->view('base_layout/head_tag'); ?>
	<title>CS Non Marketing</title>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
</head>

<body>
	<div class="container-fluid p-0">
		<div class="row equal no-gutters">
			<?php $this->load->view('base_layout/sidebar'); ?>
			<div class="col-12 col-sm-8 col-md-9 col-xl-10 wrapper">
				<?php $this->load->view('base_layout/topmenu'); ?>
				<div class="col-12 wrapper-container">
					<div class="main-wrapper">
						<div class="container">
							<div class="page-header">
								<!-- Silakan replace sesuai judul halaman divisi kalian -->
								<div class="page-title">
									Daftar Pemesanan
								</div>
								<a href="<?= base_url();?>nonmarket/tambah_pemesanan" class="btn btn-primary">Tambah Data Pemesanan</a>
								<!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
								<hr>
								<div class="container">
									<!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
									<table id="table_id" class="table table-striped table-bordered ">
										<thead>
											<tr>
												<th>Id Pemesanan</th>
												<th>Nama</th>
												<th>No Identitas</th>
												<th>Email</th>
												<th>No Telepon</th>
												<th>Paket</th>
												<th>Alamat</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($pemesanan as $pmsn) : ?>
											<tr>
												<td><?= $pmsn->id_pemesanan; ?></td>
												<td><?= $pmsn->nama; ?></td>
												<td><?= $pmsn->no_identitas; ?></td>
												<td><?= $pmsn->email; ?></td>
												<td><?= $pmsn->no_telp; ?></td>
												<td><?= $pmsn->paket; ?></td>
												<td><?= $pmsn->alamat; ?></td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
									<!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php $this->load->view('base_layout/js_mandatory')?>



	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

	<script>
		$(document).ready(function () {
			var table = $('#table_id').DataTable({
				lengthChange: false,
				buttons: ['pdf']
			});

			table.buttons().container()
				.appendTo('#table_id_wrapper .col-md-6:eq(0)');
		});

	</script>
</body>

</html>
