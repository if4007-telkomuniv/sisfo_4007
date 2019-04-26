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
                    <li class="breadcrumb-item active" aria-current="page">Daftar Pelanggan</li>
                  </ol>
                </nav>
                <br/>
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->
                  <div class="page-title">
                    Daftar Pelanggan
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPelanggan">
                      Tambah Pelanggan
                    </button>
                    <br/><br/>

                    <!-- Modal Tambahkan Pelanggan -->
                    <div class="modal fade" id="tambahPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url() ?>its/tambahPelanggan" method="POST">
                              <input type="hidden" name="id_pelanggan" value="PL<?= str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT); ?>">

                              <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                              </div>
                              <div class="form-group">
                                <label for="telepon">Nomor Telepon</label>
                                <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon">
                              </div>
                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="4"></textarea>
                              </div>
                              <hr/>
                              <div class="form-group">
                                <label for="status">Status Lengkap</label>
                                <select class="form-control" id="status" name="status">
                                  <option value="Aktif">Aktif</option>
                                  <option value="Non-aktif">Non-aktif</option>
                                </select>
                              </div>

                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <div class="col-12">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Status</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Nomor Telepon</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 1;
                        foreach($pelanggan as $p){
                      ?>
                        <tr>
                          <th scope="row"><?= $p->id_pelanggan ?></th>
                          <td>
                            <?php
                            if($p->status == 'Aktif'){
                            ?>
                            <span class="badge badge-pill badge-success"><?= $p->status ?></span>
                            <?php
                            } else {
                            ?>
                            <span class="badge badge-pill badge-secondary"><?= $p->status ?></span>
                            <?php
                            }
                            ?>
                          </td>
                          <td><?= $p->nama ?></td>
                          <td><?= $p->telepon ?></td>
                          <td><?= $p->alamat ?></td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editPelanggan<?= $p->id_pelanggan ?>">
                                Edit
                              </button>
                              <a href="<?= base_url() ?>its/hapusPelanggan/<?= $p->id_pelanggan ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </div>

                             <!-- Modal Tambahkan Pelanggan -->
                            <div class="modal fade" id="editPelanggan<?= $p->id_pelanggan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Pelanggan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="<?= base_url() ?>its/editPelanggan" method="POST">
                                      <input type="hidden" name="id_pelanggan" value="<?= $p->id_pelanggan ?>">

                                      <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $p->nama ?>" placeholder="Nama Lengkap">
                                      </div>
                                      <div class="form-group">
                                        <label for="telepon">Nomor Telepon</label>
                                        <input type="number" class="form-control" id="telepon" name="telepon" value="<?= $p->telepon ?>" placeholder="Nomor Telepon">
                                      </div>
                                      <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="4"><?= $p->alamat ?></textarea>
                                      </div>
                                      <hr/>
                                      <div class="form-group">
                                        <label for="status">Status Lengkap</label>
                                        <select class="form-control" id="status" name="status">
                                          <?php
                                          if($p->status == 'Aktif'){
                                            $aktif = 'selected';
                                            $nonaktif = '';
                                          } else {
                                            $aktif = '';
                                            $nonaktif = 'selected';
                                          }

                                          ?>
                                          <option value="Aktif" <?= $aktif?>>Aktif</option>
                                          <option value="Non-aktif" <?= $nonaktif ?>>Non-aktif</option>
                                        </select>
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
