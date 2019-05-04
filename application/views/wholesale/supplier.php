<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php $this->load->view('base_layout/head_tag'); ?>
  <title>Ini halaman template</title>
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
                  Supplier Data
                </div>
                <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                <div class="page-subtitle">

                </div>
              </div>
              <div class="row">
                <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                <div class="col-8">
                  <div class="box">
                    <div class="box-header">
                      List of Supplier Data
                    </div>
                    <div class="box-body">
                      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%" id="TableSupplier">
                        <thead>
                          <tr>
                            <th> Supplier ID</th>
                            <th> Supplier Name </th>
                            <th> Description </th>
                            <th> Item </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <!-- TBODY BELUM -->
                        <tbody>
                          <?php foreach($resultJoin->result() as $row): ?>
                            <tr class="odd gradeX">
                              <td> <?php echo $row->idSupplier; ?> </td>
                              <td> <?php echo $row->namaSupplier; ?> </td>
                              <td> <?php echo $row->deskripsi; ?> </td>
                              <td> <?php echo $row->namaKategori; ?> </td>
                              <td>
                                <form action="<?php echo base_url('wholesale/addSupplier');?>" method="POST" >
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ED<?php echo $row->idSupplier; ?>"><span class="fas fa-edit"></span></button>
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DE<?php echo $row->idSupplier; ?>"><span class="fas fa-trash-alt"></span></button>
                                  <!--<button class="btn btn-danger" type="submit" data-toggle="modal"><span class="fas fa-trash-alt"></span></button>
                                  -->
                                </form>
                              </td>
                            </tr>
                          <?php endforeach; ?>
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
                      Add Supplier Data
                    </div>
                    <div class="box-body">
                      <form class="form-horizontal row-fluid" action="<?php echo base_url('wholesale/addSupplier');?>" method="POST" enctype="multipart/form-data">
                        <?php ?>
                        <div class="control-group">
                          <label class="control-label" for="basicinput">Supplier ID</label>
                          <div class="controls">
                            <?php ?>
                            <input class="form-control" type="text" id="idSupplier" name="idSupplier" style="width: 100%" placeholder="<?php echo $idSupplierNew ?>" disabled>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="basicinput">Supplier Name</label>
                          <div class="controls">
                            <input class="form-control" type="text" id="namaSupplier" name="namaSupplier" placeholder="" required="true" style="width: 100%">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="basicinput">Description</label>
                          <div class="controls">
                            <textarea class="span12 form-control" id="deskripsi" name="deskripsi" rows="5" style="width: 100%"></textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label for="basicinput" class="control-label">Item</label>
                          <div class="controls">
                            <select class="form-control" id="sel1" name="sel1">
                              <?php  
                              foreach($resultKategori->result() as $rowKategori):
                                ?>
                                <option value="<?php echo $rowKategori->idKategori; ?>"><?php echo $rowKategori->namaKategori; ?></option>
                                <?php endforeach; ?>
                            </select>
                          </div>
                        </div>              
                        <br>
                        <div class="control-group">
                          <div class="controls">
                            <button type="submit" class="btn btn-primary">Add Data</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <?php foreach($resultJoin->result() as $row): ?>
                  <div class="modal fade" id="ED<?php echo $row->idSupplier; ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="formEditLabel">Sunting</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form class="form-horizontal row-fluid" action="<?php base_url('wholesale/addSupplier')?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="control-group">
                              <label class="control-label" for="basicinput">Supplier ID</label>
                              <div class="controls">
                                <input type="text" id="" name="" value="<?php echo $row->idSupplier; ?>" class="span8 form-control" disabled>
                                <input type="hidden" id="idSupplierEdit" name="idSupplierEdit" value="<?php echo $row->idSupplier; ?>" class="span8 form-control">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="basicinput">Supplier Name</label>
                              <div class="controls">
                                <input type="text" id="nama" name="namaSupplierEdit" value="<?php echo $row->namaSupplier; ?>" class="span8 form-control">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="basicinput">Description</label>
                              <div class="controls">
                                <textarea class="span8 form-control" id="deskripsiEdit" name="deskripsiEdit" rows="5"><?php echo $row->deskripsi; ?></textarea>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="basicinput">Item</label>
                              <div class="controls">
                                <select class="form-control" id="sel1edit" name="sel1edit">
                                  <?php foreach($resultKategori->result() as $rowKategori): ?>
                                    <option value="<?php echo $rowKategori->idKategori; ?>"><?php echo $rowKategori->namaKategori; ?></option>
                                  <?php endforeach; ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?> 
                <?php foreach($resultJoin->result() as $row): ?>
                  <div class="modal fade" id="DE<?php echo $row->idSupplier; ?>" tabindex="-1" aria-hidden="true" style="display: : none;">
                    <div class="modal-dialog" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Delete</h4>
                          </div>
                          <div class="modal-body">
                            <div>Are you sure you want to <b>delete Supplier ID : <?php echo $row->idSupplier; ?></b>?</div>
                          </div>
                          <div class="modal-footer">
                            <form action="<?php echo base_url('wholesale/addSupplier');?>" method="POST" >
                              <input type="hidden" name="delete" value="<?php echo $row->idSupplier;?>">
                              <input type="hidden" name="namaSupplierDelete" value="<?php echo $row->namaSupplier; ?>">
                              <input type="hidden" name="deskripsiDelete" value="<?php echo $row->deskripsi; ?>">
                              <input type="hidden" name="idKategoriDelete" value="<?php echo $row->idKategori; ?>">
                              <button type="submit" class="btn btn-danger">Yes</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                              <!--<button class="btn btn-danger" type="submit"><span class="fas fa-trash-alt"></span></button> -->
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
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
<script type="text/javascript">
  $(document).ready( function () {
    $("#TableSupplier").DataTable();
  } )
</script>