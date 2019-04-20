<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php $this->load->view('base_layout/head_tag'); ?>
  <title>Index Finance</title>
  <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
  <!-- Taruh file css di folder /css-->
  <!-- Taruh file js di /js-->

  <!-- Contoh cara input css, ganti sesuai kebutuhan -->
  <?php /* echo link_tag('css/base_styles.css') */ ?>
  <?php  echo link_tag('css/finance.css') ?>
  <?php /* echo link_tag('css/finance.css') */ ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<style>
  .ui-datepicker-calendar {
    display: none;
  }
</style>
<script>
  $(function () {
    $("#datepicker").datepicker({
      format: "yyyy",
      viewMode: "years",
      minViewMode: "years"
    });
  });
</script>

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
                  Dashboard Finance
                </div>
                <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                <div class="page-subtitle">
                  <?php 
                    if ($input == 1){ ?>
                  <div class="alert alert-success" role="alert">
                    Data Berhasil Di Masukan
                  </div>
                  <?php  }
                  ?>
                </div>
              </div>
              <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
              <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
              <!--tab pemasukkan-->
              <div class="row">
                <div class="col-4" data-toggle="modal" data-target="#pemasukan">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemasukkan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Pemasukkan</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tab pengeluaran-->
                <div class="col-4" data-toggle="modal" data-target="#pengeluaran">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pengeluaran.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Pengeluaran</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tab sinkronisasi pemesanan-->
                <div class="col-4">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemesanan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Pemesanan</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <!--tab laporan pemasukan-->
                <div class="col-4" data-toggle="modal" data-target="#laporanpemasukan">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemasukkan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Laporan Pemasukan</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tab laporan pengeluaran-->
                <div class="col-4" data-toggle="modal" data-target="#laporanpengeluaran">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemasukkan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Laporan Pengeluaran</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--tab laporan Bukubank-->
                <div class="col-4" data-toggle="modal" data-target="#cashbank">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemasukkan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>CASH AND BANK</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <!--tab laporan TAHUNAN WITH GRAPH BELUM KELAR -->
                <div class="col-4" data-toggle="modal" data-target="#tahunan">
                  <div class="box">
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-4">
                          <img src="<?php echo base_url('css/images/pemasukkan.png'); ?>"
                            class="img-responsive fit-image" alt="">
                        </div>
                        <div class="col-md-8">
                          <h2>Laporan Tahunan</h2>
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
    </div>
  </div>
  <?php $this->load->view('base_layout/js_mandatory')?>
  <!-- Modal PEMASUKAN-->
  <div class="modal fade" id="pemasukan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Input Pemasukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Finance/inputfinance'); ?>">
            <input type="hidden" class="form-control" id="Blanko" aria-describedby="emailHelp" name="tipe" value="M1">
            <div class="form-group">
              <label for="Blanko">Nomor Blanko</label>
              <input type="text" class="form-control" id="Blanko" aria-describedby="emailHelp"
                placeholder="Masukan Nomor Blanko" name="blanko" required>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Keperluan / Keterangan</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="keperluan"
                name="keperluan" required></textarea>
            </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rp.</span>
              </div>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Pemasukan / Debit"
                name="debit" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Lap pemasukan-->
  <div class="modal fade" id="laporanpemasukan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"> Masukan Tanggal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Finance/laporanpemasukan'); ?>">
            <div class="form-group">
              <label for="tanggal">Tanggal Mulai</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal1" required>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal Akhir</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal2">
              <small id="emailHelp" class="form-text text-muted">Tidak Wajib</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Lap pengeluaran-->
  <div class="modal fade" id="laporanpengeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"> Masukan Tanggal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Finance/laporanpengeluaran'); ?>">
            <div class="form-group">
              <label for="tanggal">Tanggal Mulai</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal1" required>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal Akhir</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal2">
              <small id="emailHelp" class="form-text text-muted">Tidak Wajib</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal cashbank-->
  <div class="modal fade" id="cashbank" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"> Masukan Bulan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Finance/cashbank'); ?>">
            <div class="form-group">
              <label for="tanggal">Bulan</label>
              <input type="month" id="start" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal1"
                required>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal tahunan-->
  <div class="modal fade" id="tahunan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"> Masukan Bulan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="tanggal">Tahun</label>
            <input type="number" id="datepicker" class="form-control" placeholder="Tahun" name="tanggal" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal pengeluaran-->

  <div class="modal fade" id="pengeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Input Pemasukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Finance/inputfinance'); ?>">
            <input type="hidden" class="form-control" id="Blanko" aria-describedby="emailHelp" name="tipe" value="K1"
              required>
            <div class="form-group">
              <label for="Blanko">Nomor Blanko</label>
              <input type="text" class="form-control" id="Blanko" aria-describedby="emailHelp"
                placeholder="Masukan Nomor Blanko" name="blanko" required>
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
              <label for="tanggal">Hingga Tanggal</label>
              <input type="Date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Keperluan / Keterangan</label>
              <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="keperluan"
                name="keperluan" required></textarea>
            </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rp.</span>
              </div>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Pengeluaran / Kredit"
                name="kredit" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>


</html>