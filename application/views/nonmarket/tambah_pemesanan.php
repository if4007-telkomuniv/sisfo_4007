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
							
								<!-- Silakan replace sesuai judul halaman divisi kalian -->
								<div class="card">
									<div class="card-header">
										Form Tambah Data Pemesanan
									</div>
									<div class="card-body">
                                        <?php if (validation_errors()) : ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?= validation_errors();?>
                                        </div>
                                        <?php endif; ?>
										<form action="" method="post">
									<div class="form-group">
										<label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama" >
                                    </div> 
                                    <div class="form-group">
										<label for="no_identitas">No identitas</label>
                                        <input type="text" name="no_identitas" class="form-control" id="no_identitas" >
                                    </div> 
                                    <div class="form-group">
										<label for="email">Email</label>
                                        <input type="email" name="email"class="form-control" id="email"> 
                                    </div> 
                                    <div class="form-group">
										<label for="no_telp">No_Telp</label>
                                        <input type="text" name="no_telp" class="form-control" id="no_telp" >
                                    </div> 
                                    <div class="form-group">
                                        <label for="paket">Jenis Paket</label>
                                        <select class="form-control" id="paket" name="paket">
                                        <option>Paket Family</option>
                                        <option>Paket Gamer</option>
                                        
                                        </select>
                                    </div>

                                     <div class="form-group">
										<label for="alamat">Alamat</label>
                                        <input type="text" name="alamat"class="form-control" id="alamat"> 
                                    </div> 
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                                </form>
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
