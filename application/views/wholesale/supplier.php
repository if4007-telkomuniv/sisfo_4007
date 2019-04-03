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
                        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%" id="TableObat">
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
                            <?php  
                              foreach($resultJoin->result() as $row):
                            ?>
                            <tr class="odd gradeX">
                              <td> <?php echo $row->idSupplier; ?> </td>
                              <td> <?php echo $row->namaSupplier; ?> </td>
                              <td> <?php echo $row->deskripsi; ?> </td>
                              <td> <?php echo $row->namaKategori; ?> </td>
                              <td>
                                <form action="<?php echo base_url('wholesale/Supplier');?>" method="POST" >
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row->idSupplier; ?>"><span class="fas fa-edit"></span></button>
                                  <input type="hidden" name="delete" value="<?php echo $row->idSupplier;?>">
                                  <button class="btn btn-danger" type="submit"><span class="fas fa-trash-alt"></span></button>
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
                  <div class="modal fade" id="<?php echo $row->idSupplier; ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="formEditLabel">Sunting</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form class="form-horizontal row-fluid" action="<?php base_url('wholesale/Supplier')?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="control-group">
                              <label class="control-label" for="basicinput">Supplier ID</label>
                              <div class="controls">
                                  <input type="text" id="" name="" value="<?php echo $row->idSupplier; ?>" class="span8" disabled>
                                  <input type="hidden" id="idSupplierEdit" name="idSupplierEdit" value="<?php echo $row->idSupplier; ?>" class="span8">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="basicinput">Supplier Name</label>
                              <div class="controls">
                                  <input type="text" id="nama" name="namaSupplierEdit" value="<?php echo $row->namaSupplier; ?>" class="span8">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="basicinput">Description</label>
                              <div class="controls">
                                  <textarea class="span8" id="deskripsiEdit" name="deskripsiEdit" rows="5"><?php echo $row->deskripsi; ?></textarea>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="basicinput">Item</label>
                              <div class="controls">
                                  <input type="text" id="namaKategori" name="namaKategoriEdit" value="<?php echo $row->namaKategori; ?>" class="span8">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="box">
                      <div class="box-header">
                        Add Supplier Data
                      </div>
                      <div class="box-body">
                        <form class="form-horizontal row-fluid" action="<?php echo base_url('wholesale/Supplier');?>" method="POST" enctype="multipart/form-data">
                          <?php?>
                          <div class="control-group">
                            <label class="control-label" for="basicinput">Supplier ID</label>
                            <div class="controls">
                              <?php?>
                              <input type="text" id="idSupplier" name="idSupplier" style="width: 100%" placeholder="<?php echo $idSupplierNew ?>" disabled>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="basicinput">Supplier Name</label>
                            <div class="controls">
                              <input type="text" id="namaSupplier" name="namaSupplier" placeholder="" required="true" style="width: 100%">
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="basicinput">Description</label>
                            <div class="controls">
                              <textarea class="span12" id="deskripsi" name="deskripsi" rows="5" style="width: 100%"></textarea>
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
                                    <?php 
                                      endforeach;
                                    ?>
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