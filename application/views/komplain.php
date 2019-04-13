<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>IT Support</title>
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
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashobard</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>its">IT Support</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Komplain</li>
                  </ol>
                </nav>
                <br/>
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->
                  <div class="page-title">
                    Komplain
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <div class="col-12">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Nomor Telepon</th>
                          <th scope="col">Komplain</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 1;
                        foreach($komplain->result() as $k){
                      ?>
                        <tr>
                          <th scope="row"><?= $k->id_komplain ?></th>
                          <td><?= $k->nama ?></td>
                          <td><?= $k->telepon ?></td>
                          <td><?= $k->komplain ?></td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editKomplain<?= $k->id_komplain ?>">
                                Edit
                              </button>
                            </div>

                             <!-- Modal Tambahkan Pelanggan -->
                            <div class="modal fade" id="editKomplain<?= $k->id_komplain ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Komplain</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="<?= base_url() ?>its/editKomplain" method="POST">
                                      <input type="hidden" name="id_komplain" value="<?= $k->id_komplain ?>">

                                      <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $k->nama ?>" placeholder="Nama Lengkap">
                                      </div>
                                      <div class="form-group">
                                        <label for="telepon">Nomor Telepon</label>
                                        <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $k->telepon ?>" placeholder="Nomor Telepon">
                                      </div>
                                      <div class="form-group">
                                        <label for="komplain">Komplain</label>
                                        <textarea class="form-control" id="komplain" name="komplain" placeholder="Komplain" rows="4"><?= $k->komplain ?></textarea>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>

                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
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
