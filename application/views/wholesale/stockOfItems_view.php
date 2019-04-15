<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Ini halaman template</title>
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
                    Items in stockBarang
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    Current Items in stockBarang
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-8">
                    <div class="box">
                      <div class="box-header">
                        List of Items in stockBarang
                      </div>
                      <div class="box-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%" id="TableObat">
                          <thead>
                            <tr>
                              <th> Item ID</th>
                              <th> Item Name </th>
                              <th> Supplier ID </th>
                              <th> Supplier Name </th>
                              <th> stockBarang </th>
                            </tr>
                          </thead>
                          <!-- TBODY BELUM -->
                          <tbody>
                            <?php  
                              foreach($result->result() as $row):
                            ?>
                            <tr class="odd gradeX">
                              <td> <?php echo $row->idBarang; ?> </td>
                              <td> <?php echo $row->namaBarang; ?> </td>
                              <td> <?php echo $row->idSupplier; ?> </td>
                              <td> <?php echo $row->namaSupplier; ?> </td>
                              <td> <?php echo $row->stockBarang; ?> </td>
                            </tr>
                            <?php 
                              endforeach;
                            ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="box-footer">
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="box">
                      <div class="box-header">
                        Current Status
                      </div>
                      <div class="box-body">
                        <?php
                          $notif = count($result->result());
                          foreach($result->result() as $row):
                        ?>
                          <?php 
                            if($row->stockBarang > 499){
                              $notif = $notif - 1;
                          ?>
                          <?php 
                            }elseif($row->stockBarang > 250){
                          ?>
                            <div class="alert alert-warning">
                              <strong>Warning! </strong><?php echo $row->idBarang; ?>: <?php echo $row->namaBarang?> is at <?php echo $row->stockBarang;?> units. (Supplier: <?php echo $row->idSupplier;?>)
                            </div>
                          <?php
                            }elseif($row->stockBarang > 1){
                          ?>
                              <div class="alert alert-danger">
                                <strong>Warning! </strong><?php echo $row->idBarang; ?>: <?php echo $row->namaBarang?> is at <?php echo $row->stockBarang;?> units. (Supplier: <?php echo $row->idSupplier;?>)
                              </div>
                          <?php
                            }elseif($row->stockBarang > -1){
                          ?>
                              <div class="alert alert-dark">
                                <strong>Warning! </strong><?php echo $row->idBarang;?>: <?php echo $row->namaBarang?> is out of stockBarang. (Supplier: <?php echo $row->idSupplier;?>)
                              </div>
                          <?php
                            }
                          endforeach;
                          ?>
                          <?php
                            if($notif == 0){
                          ?>
                              <div class="alert alert-success">
                                <strong>No Notification! </strong> All stock are above the warning limit.
                              </div>
                          <?php
                            }
                          ?>
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
  </body>
</html>
