<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'krocolab_telkom');
  define('DB_PASSWORD', 'hanzerudesu99');
  define('DB_DATABASE', 'krocolab_main');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Salary Data</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->

    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
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
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->
                  <div class="page-title">
                    Salary Data
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
                  <?php
                    $sql = mysqli_query($db,"SELECT * FROM pegawai WHERE statuspegawai <>'On enrollment' ");
                    $datas = array();
                    while($data=mysqli_fetch_array($sql)){
                      $datas[] = $data;
                    }
                  ?>
                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-10">
                    <table id="tabelPegawai" class="table">
                      <thead class="thead-light">
                        <tr>
                          <th> ID</th>
                          <th> Name</th>
                          <th> Salary</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        foreach ($datas as $data) : ?>
                        <tr>
                          <td width="100"> <b> <?php echo $data['idpegawai'] ?> </b> </td>
                          <td><?php echo $data['namapegawai'] ?></td>
                          <td width="500"> <p> <?php $duid = "Rp. " . number_format($data['gajipegawai'],2,',','.'); echo $duid; ?>,-/month </p> <button data-toggle="modal" data-target="#history<?php echo $data['idpegawai'] ?>" class="btn btn-warning" style="margin-left: 0px"> See Salary History </button></td>
                        </tr>

                        <div class="modal fade" id="history<?php echo $data['idpegawai'] ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Salary History </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                  <div class="form-group">
                                    <label class="col-form-label">Employee ID : <b> <?php echo $data['idpegawai'] ?> </b> (<?php echo $data['namapegawai'] ?>) </label>
                                    <?php
                                      $index = 1;
                                      $id = $data['idpegawai'];
                                      $query = mysqli_query($db,"SELECT * FROM gaji WHERE idpegawai= $id ");
                                      $datas2 = array();
                                      while($data2=mysqli_fetch_array($query)){
                                        $datas2[] = $data2;
                                      }

                                      foreach ($datas2 as $data2) :
                                    ?>
                                    <p><?php echo $index; $index++;?>. <b> <?php echo $data2['tanggal'] ?></b> : <?php $duid = "Rp. " . number_format($data2['jumlahSalary'],2,',','.'); echo $duid; ?>,-</p>
                                      <?php endforeach; ?>

                                  </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>

                              </div>
                            </div>
                          </div>
                        </div>


                        <?php
                          endforeach;
                        ?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
