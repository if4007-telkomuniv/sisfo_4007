<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Dashboard</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->

    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
    <?php /* echo link_tag('css/base_styles.css') */ ?>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
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
                    Dashboard
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    Sistem Informasi Enterprise Telkom Indonesia
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-12 col-md-8">
                    <div class="row">
                      <div class="col-12">
                        <div class="box">
                          <div class="box-header">
                            Total Pegawai
                          </div>
                          <div class="box-body">
                        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        <table id="datatable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Jumlah Karyawan</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($sdm as $sdm) : ?>
                                <tr>
                                    <th><?= $sdm['nama_divisi'];  ?></th>
                                    <td><?= $sdm['jumlah_karyawan'];  ?></td>
                                </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <div class="box">
                          <div class="box-header">
                            5 Top Pemesanan
                          </div>
                          <div class="box-body">
                          <table id="table_id" class="table table-striped table-bordered">
                            <thead>
                              <th>
                                Id
                              </th>
                              <th>
                                Nama
                              </th>
                              <th>
                                Paket
                              </th>
                            </thead>
                            <tbody>
                              <?php foreach ($pemesanan as $pms) : ?>
                              <tr>
                                <td>
                                  <?= $pms['id_pemesanan'];?>
                                </td>
                                <td>
                                  <?= $pms['nama'];?>
                                </td>
                                <td>
                                  <?= $pms['paket'];?>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br />
                    <div class="row">
                      <div class="col-12">
                        <div class="box">
                          <div class="box-header">
                            5 Status Pasang Sedang di Proses
                          </div>
                          <div class="box-body">
                            <table id="table_id" class="table table-striped table-bordered">
                              <thead>
                                <th>
                                  Id SP
                                </th>
                                <th>
                                  ID Pelanggan
                                </th>
                                <th>
                                  Status Pemasangan
                                </th>
                              </thead>
                              <tbody>
                                <?php foreach ($status_pemasangan as $pms) : ?>
                                <tr>
                                  <td>
                                    <?= $pms['id_sp'];?>
                                  </td>
                                  <td>
                                    <?= $pms['id_pelanggan'];?>
                                  </td>
                                  <td>
                                    <?= $pms['status_pemasangan'];?>
                                  </td>
                                </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-12">
                        <div class="box">
                          <div class="box-header">
                            5 Top Tagihan
                          </div>
                          <div class="box-body">
                            <table id="table_id" class="table table-striped table-bordered">
                              <thead>
                                <th>
                                  Id
                                </th>
                                <th>
                                  Nama
                                </th>
                                <th>
                                  Tagihan
                                </th>
                              </thead>
                              <tbody>
                                <?php foreach ($tagihan as $pms) : ?>
                                <tr>
                                  <td>
                                    <?= $pms['idTagihan'];?>
                                  </td>
                                  <td>
                                    <?= $pms['Nama'];?>
                                  </td>
                                  <td>
                                    <?= $pms['Tagihan'];?>
                                  </td>
                                </tr>
                                <?php endforeach; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-12">
                        <div class="box">
                          <div class="box-header">
                            5 Top Inventori
                          </div>
                          <div class="box-body">
                            <table id="table_id" class="table table-striped table-bordered">
                              <thead>
                                <th>
                                  Id
                                </th>
                                <th>
                                  Nama Barang
                                </th>
                                <th>
                                  Stock Barang
                                </th>
                                <th>id Suplier</th>
                              </thead>
                              <tbody>
                                <?php foreach ($inventory as $pms) : ?>
                                <tr>
                                  <td>
                                    <?= $pms['idBarang'];?>
                                  </td>
                                  <td>
                                    <?= $pms['namaBarang'];?>
                                  </td>
                                  <td>
                                    <?= $pms['stockBarang'];?>
                                  </td>
                                  <td>
                                    <?= $pms['idSupplier'];?>
                                  </td>
                                </tr>
                                <?php endforeach; ?>
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
          </div>
        </div>
      </div>
    </div>

    <?php $this->load->view('base_layout/js_mandatory')?>

    <script>
      Highcharts.chart('container', {
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
      });
    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
  </body>
</html>
