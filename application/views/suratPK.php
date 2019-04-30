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
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <div style="display: none;">
        <div class="text-center" id="printDiv">
            <img src="<?php echo base_url(); ?>assets/logo.png" alt="Responsive image" style="width: 20%; margin-top: 2%;">
            <p style="margin-top: 2%; font-size: 34px; text-align: center;"><b>Surat Perintah Kerja</b></p><br><br>
            <p style="margin-left: 5%; margin-right: 5%; font-size: 22px;">Berdasarkan Hasil Keputusan Yang Telah Ditetapkan pada <?php echo date("Y-m-d");?>, dengan ini Institusi Telkom Indonesia memerintahkan kepada : </p>
            <?php foreach ($value as $SPK) {  ?>
            <p style="font-size: 22px; margin-left: 10%; margin-right: 10%; ">Nama     : <?php echo $SPK["NamaKaryawan"];?></p>
            <p style="font-size: 22px;margin-left: 10%; margin-right: 10%; ">NIP     : <?php echo $SPK["NIP"];?></p>
            <p style="font-size: 22px;margin-left: 10%; margin-right: 10%; ">Jabatan     : <?php echo $SPK["Jabatan"];?></p>
            <p style="font-size: 22px;margin-left: 10%; margin-right: 10%; ">Alamat     : <?php echo $SPK["alamat"];?></p>
            <p style="margin-left: 5%; margin-right: 5%; font-size: 22px;">Untuk dapat <?php echo $SPK["perintah"];?> yang akan dilaksanakan pada tanggal <?php echo $SPK["start"];?> hingga <?php echo $SPK["end"];?></p>
            <?php }?><br>
            <p style="margin-left: 5%; margin-right: 5%; font-size: 22px;">Demikian surat perintah ini kami sampaikan kepada pihak yang bersangkutan, semoga dapat dilaksanakan dengan sebaik mungkin dan penuh dengan tanggung jawab.</p><br><br>
            <p style=" margin-left: 58%; font-size: 22px;">Bandung, <?php echo date("Y-m-d");?></p>
            <p style="margin-left: 58%; font-size: 22px;">Direktur Utama PT.Telkom Indonesia</p><br><br><br><br>
            <p style="margin-left: 58%; font-size: 22px;">Alex Sinaga </p>
        </div>
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
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
                <center>
                                        <div class="col-md-8 col-sm-4 col-xs-8 rounded" id="isi" >
                                <!-- Insert Logo Here -->
                                <div style="margin-top: 0.1%" class="text-center">
                                         <img src="<?php echo base_url(); ?>assets/logo.png" class="rounded" alt="Responsive image" style="width: 20%; margin-bottom: 2%;">
                                         <p style="margin-top: 2%;"><b>Surat Perintah Kerja</b></p>
                                </div>
                                    <!-- Insert Your Form Here -->
                                <!-- <form style="margin-left: 6%;margin-right: 6%;"> -->
                                    <?php echo form_open("spk_C/add"); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name ="nama" placeholder="Nama" style="border:0; border-bottom: 2px solid #D32F2F;">
                                     </div>
                                    <div class="form-group">
                                        <input type="pasword" class="form-control" name ="nip" placeholder="Nomor Induk" style="border:0; border-bottom: 2px solid #D32F2F;">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name ="jabatan" placeholder="Jabatan" style="border:0; border-bottom: 2px solid #D32F2F;">
                                     </div>
                                     <div class="form-group">
                                        <input type="text" class="form-control" name ="alamat" placeholder="Alamat" style="border:0; border-bottom: 2px solid #D32F2F;">
                                     </div>
                                     <div class="form-group">
                                        <input type="text" class="form-control" name ="pk" placeholder="Perintah Kerja" style="border:0; border-bottom: 2px solid #D32F2F;">
                                     </div>
                                     <div class="form-group">
                                            Tanggal Mulai : <input type="date" name="start">
                                            Tanggal Akhir : <input type="date" name="end">
                                     </div> 
                                     <br>
                                     <div>
                                         <button type="submit" class="btn btn-primary btn-block btn-danger" style="color: #DC143C; margin-bottom: 4%;"><b style="color: #ffffff;">Submit</b></button>
                                        <button  id="doPrint" type="button" class="btn btn-primary btn-block btn-danger" style="color: #DC143C; margin-bottom: 4%;"><b style="color: #ffffff;">Print</b></button>
                                     </div>
                                    <?php echo form_close(); ?>
                                <!-- </form> -->
                    </div>
                </center>

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
             
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
