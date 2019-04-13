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
                    <li class="breadcrumb-item active" aria-current="page">Status Pemasangan</li>
                  </ol>
                </nav>
                <br/>
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->
                  <div class="page-title">
                    Status Pemasangan
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#masukkandatabaru">
                      Masukkan Data Baru
                    </button>
                    <br/><br/>

                    <!-- Modal Tambahkan Pelanggan -->
                    <div class="modal fade" id="masukkandatabaru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url() ?>its/tambahStatusPemasangan" method="POST">
                              <input type="hidden" name="id_sp" value="SP<?= str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT); ?>">

                              <div class="form-group">
                                <label for="id_pelanggan">ID Pelanggan</label>
                                <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" placeholder="ID Pelanggan">
                              </div>
                              <hr/>
                              <div class="form-group">
                                <label for="status">Status Pemasangan</label>
                                <select class="form-control" id="status" name="status_pemasangan">
                                  <option value="Terpasang">Terpasang</option>
                                  <option value="Menunggu Stok Modem">Menunggu Stok Modem</option>
                                  <option value="Sedang Dalam Proses Pemasangan">Sedang Dalam Proses Pemasangan</option>
                                  <option value="Belum Terpasang">Belum Terpasang</option>
                                  <option value="Tidak Dapat Diproses">Tidak Dapat Diproses</option>
                                </select>
                              </div>

                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Masukkan Data</button>
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
                          <th scope="col">Status Pemasangan</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Nomor Telepon</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 1;
                        foreach($status_pemasangan->result() as $sp){
                      ?>
                        <tr>
                          <th scope="row"><?= $sp->id_sp ?></th>
                          <td>
                            <?php 
                            if($sp->status_pemasangan == 'Terpasang'){
                            ?>
                            <span class="badge badge-pill badge-primary"><?= $sp->status_pemasangan ?></span>
                            <?php
                            } 
                            else if($sp->status_pemasangan == 'Menunggu Stok Modem'){
                            ?>
                            <span class="badge badge-pill badge-warning"><?= $sp->status_pemasangan ?></span>
                            <?php
                            }
                            else if($sp->status_pemasangan == 'Sedang Dalam Proses Pemasangan'){
                            ?>
                            <span class="badge badge-pill badge-success"><?= $sp->status_pemasangan ?></span>
                            <?php
                            }
                            else if($sp->status_pemasangan == 'Belum Terpasang'){
                            ?>
                            <span class="badge badge-pill badge-secondary"><?= $sp->status_pemasangan ?></span>
                            <?php
                            }
                            else if($sp->status_pemasangan == 'Tidak Dapat Diproses'){
                            ?>
                            <span class="badge badge-pill badge-danger"><?= $sp->status_pemasangan ?></span>
                            <?php
                            }
                            ?>
                          </td>
                          <td><?= $sp->nama ?></td>
                          <td><?= $sp->telepon ?></td>
                          <td><?= $sp->alamat ?></td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editSP<?= $sp->id_pelanggan ?>">
                                Edit
                              </button>
                              <a href="<?= base_url() ?>its/hapusStatusPemasangan/<?= $sp->id_sp ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </div>

                             <!-- Modal Tambahkan Pelanggan -->
                            <div class="modal fade" id="editSP<?= $sp->id_pelanggan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Pelanggan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="<?= base_url() ?>its/editStatusPemasangan" method="POST">
                                      <input type="hidden" name="id_sp" value="<?= $sp->id_sp ?>">

                                      <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" disabled class="form-control" id="nama" name="nama" value="<?= $sp->nama ?>" placeholder="Nama Lengkap">
                                      </div>
                                      <div class="form-group">
                                        <label for="telepon">Nomor Telepon</label>
                                        <input type="number" disabled class="form-control" id="telepon" name="telepon" value="<?= $sp->telepon ?>" placeholder="Nomor Telepon">
                                      </div>
                                      <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" disabled id="alamat" name="alamat" placeholder="Alamat" rows="4"><?= $sp->alamat ?></textarea>
                                      </div>
                                      <hr/>
                                      <div class="form-group">
                                        <label for="status">Status Pemasangan</label>
                                        <select class="form-control" id="status" name="status_pemasangan">
                                          <?php
                                            if($sp->status_pemasangan == 'Terpasang'){
                                                $a = 'selected'; $b = ''; $c = ''; $d = ''; $e = '';
                                            }
                                            else if($sp->status_pemasangan == 'Menunggu Stok Modem'){
                                                $a = ''; $b = 'selected'; $c = ''; $d = ''; $e = '';
                                            }
                                            else if($sp->status_pemasangan == 'Sedang Dalam Proses Pemasangan'){
                                                $a = ''; $b = ''; $c = 'selected'; $d = ''; $e = '';
                                            }
                                            else if($sp->status_pemasangan == 'Belum Terpasang'){
                                                $a = ''; $b = ''; $c = ''; $d = 'selected'; $e = '';
                                            }
                                            else if($sp->status_pemasangan == 'Tidak Dapat Diproses'){
                                                $a = ''; $b = ''; $c = ''; $d = ''; $e = 'selected';
                                            }

                                          ?>
                                          <option value="Terpasang" <?= $a ?>>Terpasang</option>
                                          <option value="Menunggu Stok Modem" <?= $b ?>>Menunggu Stok Modem</option>
                                          <option value="Sedang Dalam Proses Pemasangan" <?= $c ?>>Sedang Dalam Proses Pemasangan</option>
                                          <option value="Belum Terpasang" <?= $d ?>>Belum Terpasang</option>
                                          <option value="Tidak Dapat Diproses"> <?= $e ?>Tidak Dapat Diproses</option>
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
