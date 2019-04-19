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
  <div style="display: none;">
      <div id="printDiv">
        <h3>Ini yang di print</h3>
      </div>
   </div>
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
                        Digital & Strategic Portofolio
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    Layanan Digital &amp; Strategic Portfolio Telkom Indonesia
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-4">
                    <div class="box">
                      <div class="box-header">
                        Tagihan Pelanggan
                      </div>
                      <div class="box-body">
                        Klik tombol dibawah ini untuk mencetak seluruh nama pelanggan beserta tagihannya.
                      </div>
                      <div class="box-footer">
                      <button type="button" class="btn btn-danger" id="doPrint">Print</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="box">
                      <div class="box-header">
                        Blanko Pengeluaran
                      </div>
                      <div class="box-body">
                        Klik tombol dibawah ini untuk mencetak seluruh pengeluaran perusahaan.
                      </div>
                      <div class="box-footer">
                        <button type="button" class="btn btn-danger">Print</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="box">
                      <div class="box-header">
                        Surat Perintah Kerja
                      </div>
                      <div class="box-body">
                        Klik tombol dibawah ini untuk mencetak surat perintah kerja .
                      </div>
                      <div class="box-footer">
                        <button type="button" class="btn btn-danger">Print</button>
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
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  document.getElementById("doPrint").addEventListener("click", function() {
     var printContents = document.getElementById('printDiv').innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
});
  </script>
</html>
