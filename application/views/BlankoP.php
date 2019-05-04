<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Blanko Pengeluaran</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->

    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
    <?php /* echo link_tag('css/base_styles.css') */ ?>
    <?php //echo link_tag('assets/css/jquery.dataTables.css') ?>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
  </head>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <div style="display: none;">
      <div class="text-center" id="printDiv">
        <img src="<?php echo base_url(); ?>assets/logo.png" alt="Responsive image" style="width: 20%; margin-top: 1%;">
            <p style="margin-top: 2%; font-size: 34px; text-align: center;"><b>Blanko Pengeluaran</b></p><br><br>
              <div class=""></div>
                <script src="Chart.bundle.js"></script>

                <style type="text/css">
                   .container {
                        width: 100%;
                        margin: 15px auto;
                    }
                </style>
                <div class="container">
                    <canvas id="myChart"></canvas>
                </div>
                <?php
                     $data1 = array();
                      foreach ($pengeluaran as $row) {
                       $data1[] = $row->harga;
                }
                ?>
                <script>
                    var ctx = document.getElementById("myChart");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["September","Oktober", "November", "Desember", "Januari", "Februari", "Maret", "April"],
                                datasets: [{
                                        label: '# Pengeluaran',
                                        data: [<?php "$data1"?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)'
                                        ],
                                        borderWidth: 1
                                    }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                }
                            }
                        });
                    </script>
              <div class="form-group">
                                        <table class="table">
                                          <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Id Pengeluaran</th>
                                                <th>Nama</th>
                                                <th>Unit</th>
                                                <th>Harga</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <?php $no=1; foreach($pengeluaran as $data){
                                                  echo "<tr><td>$no</td><td>$data->idPengeluaran</td><td>$data->nama</td><td>$data->unit</td><td>$data->harga</td></tr>";
                                                  $no++; } ?>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>

      </div>
    </div>
  <body>
    <div class="container-fluid p-0">
      <div class="row equal no-gutters">
        <?php $this->load->view('base_layout/sidebar'); ?>
        <div class="col-12 col-sm-8 col-md-9 col-xl-10 wrapper">
          <?php $this->load->view('base_layout/topmenu'); ?>
          <div class="col-12 wrapper-container">
            <div class="main-wrapper">
              <div class="container">
                <div class="page-header" style="text-align: left;">
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->

                  <div class="page-title">
                       Digital & Strategic Portofolio
                  </div>
                      Data Pengeluaran Perusahaan PT. Telkom Indonesia
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
                <center>
                    <div class="col-md-8 col-sm-4 col-xs-8 rounded" id="isi" style="margin-top: 3%" id="isi" >
                     <!-- Insert Logo Here -->
                        <div style="margin-top: 0.1%" class="text-center">
                          <img src="<?php echo base_url(); ?>assets/logo.png" style="width: 30%;">
                           <p style="margin-top: 4%; margin-bottom: 5%"><b>Blanko Pengeluaran</b></p>
                         </div>
                         <?php echo form_open("bp_C/get_data"); ?>
                                <div>
                                        <table class="table" cellspacing="0" width="100%">
                                          <thead class="thead-dark">
                                              <tr>
                                                <th>No</th>
                                                <th>Id Pengeluaran</th>
                                                <th>Nama</th>
                                                <th>Unit</th>
                                                <th>Harga</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <?php $no=1; foreach($pengeluaran as $data){
                                                  echo "
                                                  <tr>
                                                  <td>$no</td>
                                                  <td>$data->idPengeluaran</td>
                                                  <td>$data->nama</td>
                                                  <td>$data->unit</td>
                                                  <td>$data->harga</td>
                                                  </tr>";
                                                  $no++ ;
                                                  } ?>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <button  id="doPrint" type="button" class="btn btn-primary btn-block btn-danger" style="color: #DC143C; margin-bottom: 4%;"><b style="color: #ffffff;">Print</b></button>
                                     </div>
                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('base_layout/js_mandatory')?>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" type="text/javascript"></script>
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
