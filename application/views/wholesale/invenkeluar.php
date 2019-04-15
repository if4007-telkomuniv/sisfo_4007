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
        <div class="col-12 col-sm-8 col-md-9 col-xl-10 wrapper">
          <?php $this->load->view('base_layout/topmenu'); ?>
          <div class="col-12 wrapper-container">
            <div class="main-wrapper">
              <div class="container">
                <div class="page-header">
                  <!-- Silakan replace sesuai judul halaman divisi kalian -->
                  <div class="page-title">
                    Inventory Keluar
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                  <div class="page-subtitle">
                    Form Inventory Keluar.
                  </div>
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-12">
                    <div class="box">
                      <div class="box-header">
                        Form Inventory OUT
                      </div>
                      <div class="box-body">
                          <?=form_open('wholesale/formInvenOUT', 'class="was-validated" id="formInvenOUT"');?>
                          <div class="form-group">
                            <label for="namaBarang">Nama Barang</label>
                            <select class="form-control" id="namaBarang" name="namaBarang">
                              <?php
                                foreach($barang->result() as $s){
                                  echo '<option value="'.$s->idBarang.'">'.$s->idBarang.' - '.$s->namaBarang.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="stockBarang">Stock Barang:</label>
                            <input type="number" class="form-control" id="stockBarang" placeholder="Banyak barang" name="stockBarang" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Harap diisi.</div>
                          </div>
                          <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="Keterangan" placeholder="Keterangan tambahan." name="keterangan">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      <div class="box-footer">
                        Footer
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
    <script>
      $(document).ready(function(){
        $('select#namaBarang').on('change', function() {
          $.ajax({
            url: "<?php echo base_url();?>wholesale/getItem",
            dataType: 'text',
            type: "POST",
            success: function (result) {
                var obj = $.parseJSON(result);
                $.each(obj,function(index, object) {
                    if(object['idBarang'] == this.value){
                        $('input#stockBarang').replaceWith('<input type="number" class="form-control" id="stockBarang" placeholder="Banyak barang" name="stockBarang" min="1" max="'+ object['stockBarang'] +'"required>');
                    }
                });
            }
          })
        });
      });
    </script>
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>
</html>
