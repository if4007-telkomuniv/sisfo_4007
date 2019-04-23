<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <?php $this->load->view('base_layout/head_tag'); ?>
  <title>Marketing</title>
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
                  Marketing
                </div>
                <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                <div class="page-subtitle">
                  Layanan Penjualan Produk Telkom Indonesia
                </div>
              </div>
              <div class="row d-flex flex-md-row flex-sm-column">
                <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                <div class="col-md-8 col-sm-12 order-2">
                  <div class="box d-none" id='articleForm'>
                    <div class="box-header">
                      Add Article
                    </div>
                    <div class="box-body">
                      <form action="<?= base_url()?>csmarketing/addArticle/" method="post">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Judul</label>
                          <input name='title' type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Keterangan</label>
                          <textarea name='isi' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-danger">Add</button>
                      </form>
                    </div>
                    <?php foreach($article as $ar){
                      echo '<div class="box-header mt-2">
                                Edit Article
                            </div>
                            <div class="box-body">
                                <form action="'.base_url().'csmarketing/editArticle/'.$ar["id"].'" method="post">
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1">Judul</label>
                                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="'.$ar['title'].'">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Keterangan</label>
                                    <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="3">'.$ar['isi'].'</textarea>
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-danger">Edit</button>
                                  <a href="'.base_url().'csmarketing/hapusArticle/'.$ar["id"].'" class="btn btn-danger">Delete</a>
                                </form>
                              </div>';
                    }?>
                  </div>
                  <div class="box" id='bannerForm'>
                    <?php foreach($banner as $b){?>
                    <div class="box-header">
                      Banner
                    </div>
                    <div class="box-body">
                      <form action='<?= base_url()?>csmarketing/editBanner/<?= $b['id']?>' method='post'>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Judul</label>
                          <input name='title' type="text" class="form-control" id="exampleFormControlInput1" value='<?= $b['h1']?>'>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Keterangan</label>
                          <textarea name='ket' class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $b['keterangan']?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-danger">Edit</button>
                      </form>
                    </div>
                  </div>
                  <?php }?>
                  <?php foreach($about as $a){?>
                  <div class="box d-none" id='aboutForm'>
                    <div class="box-header">
                      About
                    </div>
                    <div class="box-body">
                      <form action='<?= base_url()?>csmarketing/editAbout/<?= $a['id']?>' method="post">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Judul</label>
                          <input name='title' type="text" class="form-control" id="exampleFormControlInput1" value='<?= $a['title']?>'>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Keterangan</label>
                          <textarea name='isi' class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $a['isi']?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-danger">Edit</button>
                      </form>
                    </div>
                  </div>
                  <?php }?>
                </div>
                <div class="col-md-4 col-sm-12 order-1 mb-sm-2 mb-xs-2">
                  <div class="box">
                    <div class="box-header">
                      Select
                    </div>
                    <div class="box-body d-flex justify-content-between flex-wrap">
                      <button class='btn btn-danger mt-2 mw-25' id='banner'>Banner</button>
                      <button class='btn btn-danger mt-2 mw-25' id='about'>About</button>
                      <button class='btn btn-danger mt-2 mw-25' id='article'>Article</button>
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
  <script src="<?= base_url()?>js/marketing.js"></script>
</body>

</html>
