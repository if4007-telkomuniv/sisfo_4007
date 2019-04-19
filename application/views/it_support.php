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
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->
                  <div class="page-title">
                    IT Support
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    Layanan IT Telkom Indonesia
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-6">
                    <div class="box">
                      <div class="box-header">
                        Status Pemasangan
                      </div>
                      <div class="box-body">
                        Halaman untuk dapat mengetahui jenis status pemasangan yang sedang dilakukan oleh pelanggan
                        <br><br>
                        <a href="<?= base_url() ?>its/status_pemasangan" class="btn btn-danger btn-sm">Kunjungi Halaman</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="box">
                      <div class="box-header">
                        Daftar Pelanggan
                      </div>
                      <div class="box-body">
                        Halaman yang berfungsi untuk menampilkan dan mengelola daftar pengguna yang tercatat sebagai pelanggan
                        <br><br>
                        <a href="<?= base_url() ?>its/daftar_pelanggan" class="btn btn-danger btn-sm">Kunjungi Halaman</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row" style="margin-top: 32px">

                  <div class="col-6">
                    <div class="box">
                      <div class="box-header">
                        Komplain
                      </div>
                      <div class="box-body">
                        Halaman yang dapat dipakai oleh pelanggan untuk dapat melakukan keluhan terhadap service yang telah dilakukan
                        <br><br>
                        <a href="<?= base_url() ?>its/komplain" class="btn btn-danger btn-sm">Kunjungi Halaman</a>
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
