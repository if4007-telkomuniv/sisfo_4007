<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <?php $this->load->view('base_layout/topmenu'); ?>

    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->

    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
    <?php /* echo link_tag('css/base_styles.css') */ ?>
  </head>
  <body>
    <!-- Ini gonta ganti aja dibawah -->
    <div class="container-fluid p-0">
      <div class="row equal no-gutters">
        
        <div class="col-12 col-sm-8 col-md-9 col-xl-10 wrapper">
          
          <div class="col-12 wrapper-container">
            <div class="main-wrapper">
              <div class="container">
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-sm-5">
                  </div>
                  <div class="col-sm-5">
                    <div class="box ">
                      <div class="center-box "  >
                        <div class="box-header" style="text-align: center; padding: 30px">
                          <a href=""><img src="src/img/Telkom_Indonesia_2013.svg" alt="logo"></a>
                        </div>
                        <div class="box-body">
                          <div class="login-text" style="text-align: center">
                            <b>Login</b>
                          </div>
                          Username :
                          <br>
                          <input class="form-control" type="text" name="Username" placeholder="ID"/> 
                          <br>
                          Password :
                          <br>
                          <input class="form-control" type="password" name="Password" placeholder="Password"/>
                          <br>
                          <div class="login-button" style="text-align: center">
                            <button type="button" class="btn btn-primary btn-md " >LOGIN</button>
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
    <!-- Ini gonta ganti aja diatas -->
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
