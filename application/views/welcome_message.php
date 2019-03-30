<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'hrm');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   //if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $query = mysqli_query($db,"SELECT COUNT(*) FROM pegawai");
      //$jumBaris = (int)$query;
      $sql = mysqli_query($db,"SELECT * FROM pegawai");
      $datas = array();
      while($data=mysqli_fetch_array($sql)){
        $datas[] = $data;
      }
    
   //}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Employee Data</title>
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
                    Employee Data
                  </div> <br>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <!--div class="page-subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </div-->
                  <button type="button" class="btn" style="background-color: #999999" data-toggle="modal" data-target="#exampleModal">Add New Employee</button>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                        <?php
                        
                          foreach ($datas as $data) : ?>
                            <tr>
                            <th scope="row"> <?php echo $data['idpegawai'] ?> </th>
                            <td> <?php echo $data['namapegawai'] ?> </td>
                            <td> <?php echo $data['genderpegawai'] ?> </td>
                            <td> <?php echo $data['emailpegawai'] ?> </td>
                            <td> <?php echo $data['statuspegawai'] ?> </td>
                            </tr>
                          <?php 
                          endforeach;
                        ?>
                      
                    </tbody>
                  </table>
                </div>

                <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                          <label for="message-text" class="col-form-label">Message:</label>
                          <textarea class="form-control" id="message-text"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Add Employee</button>
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
