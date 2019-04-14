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
    <div style="height: 100%;">
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
        <div class="wrapper">
          <div class="main-wrapper">
            <div class="row">
              <div class="col-12">
                <div class="box" style="padding: 40px;">
                  <div class="center-box "  >
                    <div class="box-header" style="text-align: center; padding: 30px">
                      <a href=""><img src="src/img/Telkom_Indonesia_2013.svg" alt="logo"></a>
                    </div>
                    <div class="box-body">
                      <div class="login-text" style="text-align: center">
                        <b>Login</b>
                      </div>
                      <form class="" action="<?php echo base_url()."dashboard" ?>" method="post">
                        Username :
                        <br>
                        <input class="form-control" type="text" value="11154" name="Username" placeholder="ID"/>
                        <br>
                        Password :
                        <br>
                        <input class="form-control" type="password" value="11154" name="Password" placeholder="Password"/>
                        <br>
                        <div class="login-button" style="text-align: center">
                          <button type="submit" class="btn btn-primary btn-md">LOGIN</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!-- <div class="col-12 col-sm-8 col-md-9 col-xl-10 wrapper">
          <div class="col-12 wrapper-container">
            <div class="main-wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-sm-5">
                  </div>
                  <div class="col-sm-5">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <!-- Ini gonta ganti aja diatas -->
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
