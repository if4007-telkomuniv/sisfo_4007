<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Employee Dismissal</title>
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
                <center>
                <div class="page-header">
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->
                  <div class="page-title">
                    Employee Dismissal
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                </div>
              </center>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-3"></div>
                  <div class="col-6">
                    <div class="box">
                      <form method="post" action="<?php echo base_url()?>Pemecatan/IdCheck">
                      <div class="box-body">
                          <div class="form-group">
                            <label class="col-form-label">Employee ID :</label>
                            <input required="" type="number" class="form-control" name="eid" min="0" step="1" id="idnya">
                          </div>
                          <div class="form-group">
                             <label class="col-form-label">Reason of Dismissal :</label>
                            <select class="form-control" name="ereason" required="">
                              <option disabled selected value="">--Choose One--</option>
                              <option>Employment Contract</option>
                              <option>Performance</option>
                              <option>Financial</option>
                              <option>Sick</option>
                              <div class="dropdown-divider"></div>
                              <option>Others</option>
                            </select>
                          </div>
                          <div class="form-group"> 
                            <label for="Desc" style="font-size: 20px;">Description :</label>
                            <textarea class="form-control" rows="5" id="desc" style="font-size: 20px" name="edeskripsi" required=""></textarea>
                          </div>
                         
                          <div class="modal-footer">
                        <input  type="submit" class="btn btn-danger" name="submit" id="btnAdd" value="Delete Employee" onclick="sure()" >
                      </div>
                      <p id="btnAdd"></p>
                      
                  
                </div>
              </form>
              </div>
            </div>
            <div class="col-3"></div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
  <script type="text/javascript">
    function sure() {
      if (confirm('Are you sure you want fire employee with selected ID? All changes cannot be undone.')) { 
        
      } else {
        document.getElementById("idnya").value = "";
        alert('Dismissal Canceled.');
        location.href = 'http://localhost/sisfo_4007/Pemecatan/index';
      }
    }
  </script>
</html>
