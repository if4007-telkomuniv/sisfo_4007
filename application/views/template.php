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
        <div class="col-12 col-sm-8 col-md-9">
          <div class="col-12 top-menu-container">
            <div class="row no-gutters">
              <div class="top-menu">
                <div class="bar">
                  Dummy
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 wrapper-container">
            <div class="main-wrapper">
              <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
