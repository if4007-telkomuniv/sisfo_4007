<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('base_layout/head_tag'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telkom Indonesia</title>
    <link rel="icon" href="src/img/favicon.ico">
    <link rel="stylesheet" href="src/css/style.css">
    <?= link_tag('src/img/favicon.ico')  ?>
    <?= link_tag('src/css/style.css')  ?>
</head>
<body>
<nav id="navbar" >
        <div class="nav-logo">
        <a href=""><img src=" <?= base_url('src/img/Telkom_Indonesia_2013.svg') ?>" alt="logo"></a>
        </div>
        <div class="nav-link">
            <a href="<?= base_url(); ?>">Home</a>
            <a href="">Promo</a>
            <a href="">Pusat Bantuan</a>
        </div>
    </nav>
    <br><br><br><br><br><br>
                            <div class="container" >
                                <div class="card ">
									<div class="card-header" >
										Form Tambah Data Komplain
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
										<label for="no_telp">No_Telp</label>
                                        <input type="text" name="no_telp" class="form-control" id="no_telp" >
                                    </div> 
                                    <div class="form-group">
										<label for="alamat">Alamat</label>
                                        <input type="text" name="alamat"class="form-control" id="alamat"> 
                                    </div> 
                                    <div class="form-group">
                                        <label for="paket">Jenis Paket</label>
                                        <select class="form-control" id="paket" name="paket">
                                        <option>Paket Family</option>
                                        <option>Paket Gamer</option>
                                        
                                        </select>
                                    </div>
                                     <div class="form-group">
										<label for="komplain">Komplain</label>
                                        <input type="textarea" class="form-control" id="komplain" name="komplain" >

                                        
                                    </div> 
                                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                                </form>
									</div>
								</div>
                            </div>
	
						



 <?php $this->load->view('base_layout/js_mandatory')?>

    <script src="src/js/navbar.js"></script>
    <footer style="margin-top: 209px;">
        <span class="copyright">&copy 2019 <a href="<?= base_url()?>home">Telkom Indonesia</a></span>
    </footer>
</body>
</html>
