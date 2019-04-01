<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Admin Login</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->

    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
    <?php /* echo link_tag('css/base_styles.css') */ ?>
  </head>
  <body>
    <!-- Ini gonta ganti aja dibawah -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <a href="<?php echo base_url("dashboard") ?>">Admin Login</a>
        </div>
      </div>
    </div>
    <!-- Ini gonta ganti aja diatas -->
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
