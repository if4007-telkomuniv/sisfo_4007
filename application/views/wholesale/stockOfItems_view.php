<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Stock Of Items</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/sc-2.0.0/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/sc-2.0.0/datatables.min.js"></script>
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
                    Items in Stock
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    Current Items in Stock
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-8">
                    <div class="box">
                      <div class="box-header">
                        List of Items in Stock
                      </div>
                      <div class="box-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%" id="TableStock">
                          <thead>
                            <tr>
                              <th> Item ID</th>
                              <th> Item Name </th>
                              <th> Supplier ID </th>
                              <th> Supplier Name </th>
                              <th> Stock </th>
                              <th> Description </th>
                              <th> Update </th>
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
                              <td> <?php echo $row->keterangan; ?> </td>
                              <td>
                                <form action="<?php echo base_url('stockofitems');?>" method="POST" >
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row->idBarang; ?>"><span class="fas fa-edit"></span></button>
                                </form>
                              </td>
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
                                <strong>Warning! </strong><?php echo $row->idBarang;?>: <?php echo $row->namaBarang?> is out of stock. (Supplier: <?php echo $row->idSupplier;?>)
                              </div>
                          <?php
                            }
                          endforeach;
                          ?>
                          <?php
                            if($notif == 0){
                          ?>
                              <div class="alert alert-success">
                                <strong>No Notification! </strong> All Stocks are above the warning limit.
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
    <!--MODAL EDIT-->
                  <?php
                      foreach($result->result() as $row):
                  ?>

                  <div class="modal fade" id="<?php echo $row->idBarang; ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="formEditLabel">Edit</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <form class="form-horizontal row-fluid" action="<?php echo base_url('Wholesale/itemEdit');?>" method="POST" enctype="multipart/form-data">
                                  <div class="modal-body">

                                    <div class="form-group row">
                                      <label for="idBarangEdit" class="col-sm-2 col-form-label">Item ID</label>
                                      <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="idBarangEdit" name="idBarangEdit" value="<?php echo $row->idBarang;?>">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="namaBarangEdit" class="col-sm-2 col-form-label">Item Name</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="namaBarangEdit" name="namaBarangEdit" value="<?php echo $row->namaBarang;?>">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="idSupplierEdit" class="col-sm-2 col-form-label">Supplier ID</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="idSupplierEdit" name="idSupplierEdit" value="<?php echo $row->idSupplier;?>">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="namaSupplierEdit" class="col-sm-2 col-form-label">Supplier Name</label>
                                      <div class="col-sm-10">
                                        <label type="text" readonly class="form-control-plaintext"> <?php echo $row->namaSupplier;?> </label>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="stockBarangEdit" class="col-sm-2 col-form-label">In Stock</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="stockBarangEdit" name="stockBarangEdit" value="<?php echo $row->stockBarang; ?>">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="keteranganEdit" class="col-sm-2 col-form-label">Description</label>
                                      <div class="col-sm-10">
                                        <textarea id="keteranganEdit" name="keteranganEdit" rows="5" style="min-width: 100%"><?php echo $row->keterangan; ?></textarea>
                                      </div>
                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
                  <?php
                    endforeach;
                  ?>
                  <!---->
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
<script type="text/javascript">
  $(document).ready( function () {
    $("#TableStock").DataTable();
  } )
</script>
