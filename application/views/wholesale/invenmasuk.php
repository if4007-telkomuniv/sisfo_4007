<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Ini halaman template</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/sc-2.0.0/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/sc-2.0.0/datatables.min.js"></script>
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->

    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
    <?php /* echo link_tag('css/base_styles.css') */ ?>
    <?php if($success) {echo "<script type='text/javascript'>alert('Input berhasil');</script>";} ?>
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
                    Inventory Masuk
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    Form Inventory Masuk.
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-8">
                    <div class="box">
                      <div class="box-header">
                        History Inventory IN
                      </div>
                      <div class="box-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%" id="TableHistory">
                          <thead>
                            <tr>
                              <th> Item ID</th>
                              <th> Item IN </th>
                              <th> Description </th>
                              <th> Date </th>
                            </tr>
                          </thead>
                          <!-- TBODY BELUM -->
                          <tbody>
                            <?php  
                              foreach($history->result() as $row):
                            ?>
                            <tr class="odd gradeX">
                              <td> <?php echo $row->idBarang; ?> </td>
                              <td style="color: green;font-weight: bold;">+<?php echo $row->stockBarang; ?> </td>
                              <td> <?php echo $row->keterangan; ?> </td>
                              <td> <?php echo $row->tanggal; ?> </td>
                            </tr>
                            <?php 
                              endforeach;
                            ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="box-footer">
                        Footer
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="box">
                      <div class="box-header">
                        Form Inventory IN
                      </div>
                      <div class="box-body">
                          <?=form_open('wholesale/formInvenIN', 'class="was-validated" id="formInvenIN"');?>
                          <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <select class="form-control" id="supplier" name="idSupplier">
                              <?php
                                foreach($supplier->result() as $s){
                                  echo '<option value="'.$s->idSupplier.'">'.$s->idSupplier.' - '.$s->namaSupplier.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="namaBarang">Nama Barang</label>
                            <input type="text" class="form-control" id="namaBarang" placeholder="Nama barang" name="namaBarang" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Harap diisi.</div>
                          </div>
                          <div class="form-group">
                            <label for="stockBarang">Stock Barang:</label>
                            <input type="number" class="form-control" id="stockBarang" placeholder="Banyak barang" name="stockBarang" min=1 required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Harap diisi.</div>
                          </div>
                          <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="Keterangan" placeholder="Keterangan tambahan." name="keterangan">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
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
    <script>
      $(document).ready(function(){
        $("#TableHistory").DataTable();
      });
    </script>
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
