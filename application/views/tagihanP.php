<!-- Monica Dessy Amanda 1301164452 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Tagihan Pelanggan</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->
    <!-- Contoh cara input css, ganti sesuai kebutuhan -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <?php /* echo link_tag('css/base_styles.css') */ ?>
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
                  <!-- Silakan replace sesuai judul halaman divisi kalian
                  <div class="page-title">
                        Digital & Strategic Portofolio
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    Berikut ini adalah tabel berisi data tagihan pelanggan.
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <center id="printDiv">
                  <!-- Judul dan Logo -->
                  <div class="col-md-8 col-sm-4 col-xs-8 rounded" id="isi" style="margin-top: 3%">
                    <div style="margin-top: 0.1%" class="text-center">
                      <img src="<?php echo base_url(); ?>assets/logo.png" style="width: 20%;">
                      <p style="margin-top: 2%;"><b>Tagihan Pelanggan</b></p>
                    </div>
                  </div>
                  <!-- Ini Datatabel -->
                  <div>
                    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%"">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Tagihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach($tagihan as $view){
                          echo "
                          <tr>
                          <td>$no</td>
                          <td>$view->idTagihan</td>
                          <td>$view->Nama</td>
                          <td>$view->Tagihan</td>
                          </tr>";
                          $no++;
                          } ?>
                      </tbody>
                    </table>
                  </center>
                  </div>
                  <!-- Ini button Print -->
                  <center>
                  <div class="col-6" id="isi">
                      <p style="margin-top: 15%; ma"> Klik tombol "Print" untuk mencetak data diatas. </p>
                      <button type="button" class="btn btn-danger" id="doPrint" style="margin-bottom: 40%">Print</button>
                  </div>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript">
  document.getElementById("doPrint").addEventListener("click", function() {
     var printContents = document.getElementById('printDiv').innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
    });
  </script>

</html>