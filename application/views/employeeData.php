<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'telkom');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
      $sql = mysqli_query($db,"SELECT * FROM pegawai");
      $datas = array();
      while($data=mysqli_fetch_array($sql)){
        $datas[] = $data;
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Employee Data</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->
    <style type="text/css">
      #myInput {
        background: url("<?php echo base_url()?>search.png") no-repeat right center;
        background-size: 20px;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 8px 20px 8px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
      }
    </style>
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

                <input type="text" id="myInput" onkeyup="searchID()" placeholder="Search by ID...">
                
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
                  <table class="table" id="tabelPegawai">
                    <thead class="thead-light">
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
                            <td scope="row"> <b> <?php echo $data['idpegawai'] ?> </b></td>
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

              <form id="formAdd" action="<?php echo base_url()?>Data_pegawai/addEmployee" method="post">
                <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                        <div class="form-group">
                          <label class="col-form-label">Employee ID :</label>
                          <input required="" type="number" class="form-control" name="eid" min="0" step="1">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label">Full Name :</label>
                          <input required="" type="text" class="form-control" name="ename">
                        </div>
                        <div class="form-group">
                          <label class="col-form-label">Gender :</label>
                          <select class="form-control" name="egender" required>
                            <option value="" disabled selected>--Select Gender--</option>
                            <option value="male">Male</option>
                            <option value="female"> Female</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label class="col-form-label">E-Mail:</label>
                          <input required="" type="email" class="form-control" name="eemail">
                        </div>
                        <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <input type="submit" class="btn btn-primary" name="submit" id="btnAdd" value="Add Employee" >
                    </div>
                     
                    </div>
                  </div>
                </div>
              </div>
 </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('base_layout/js_mandatory')?>
  </body>

  <script>
  function searchID() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("tabelPegawai");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i <= tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
</script>

</html>
