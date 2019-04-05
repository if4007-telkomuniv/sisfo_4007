<?php 
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'hrm');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Emplooye Graph Data</title>
    <script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->

    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
    <?php echo link_tag('css/style_graph.css'); ?>
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
                    Employee Graph Data
                  </div>
                  <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                </div>
                <div class="row">
                  <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->

                  <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                  <div class="col-4" id="listGraph" >
                    <div class="box">
                      <div class="box-header">
                        Graphic List
                      </div>
                      <div class="box-body">
                      	<ul>
                            <li>
                                <button id="all1" onclick="Muncul()" class="btn btn-outline-light text-dark" style="background-color: #ee1e24">
                                All 
                                </button>
                            </li>
                            <li>
                                <button id="att1" onclick="atMuncul()" class="btn btn-outline-light text-dark">
                                Attendance 
                                </button>
                            </li>
	                      		<li>
	                      			  <button id="hrdiv1" onclick="hrMuncul()" class="btn btn-outline-light text-dark">
                                HR by Division 
                                </button>
	                      		</li>
	                      		<li>
	                      			  <button id="age1" onclick="ageMuncul()" class="btn btn-outline-light text-dark">
                                Age Ratio 
                                </button>
	                      		</li>
	                      		<li>
	                      			  <button id="divperf1" onclick="divMuncul()" class="btn btn-outline-light text-dark">
                                Division Performance 
                                </button>
	                      		</li>
	                      		<li>
	                      			  <button id="newout1" onclick="newoutMuncul()" class="btn btn-outline-light text-dark">
                                Suspension and Newcomer Ratio 
                                </button>
	                      		</li>
                      	</ul> 
                      </div>
                    </div>
                  </div>
                  <div class="col-8" id="att">
                    <div class="box">
                      <div class="box-header">
                        Attendance Graph
                      </div>
                      <div class="box-body">
                        <div id="att_container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        Graph of Employee's Attendance. Accumulate data from Employee's attendace and grouped into 3 categories ( Reguler Employee, Manager and Chief). Datas will be updated everyday and Graph will be updated once every months
                      </div>
                      <div class="box-footer">
                        PT. Telkom Indonesia
                      </div>
                    </div>
                  </div> 
                  <div class="col-4"></div>
                  <div class="col-8" id="hrdiv" style=" padding-top: 10px; position: sticky;">
                    <div class="box">
                      <div class="box-header">
                        Human Resource by Division Graph
                      </div>
                      <div class="box-body">
                        <div id="hrdiv_container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        Graph of total Human Resource from each Divisions. Accumulate total number of Employees from each Division. Data Included the number of Reguler Employee and Division's Chief. Data will updated regularly each six months
                      </div>
                      <div class="box-footer">
                        PT. Telkom Indonesia
                      </div>
                    </div>
                  </div> 
                  <div class="col-4"></div>
                  <div class="col-8" id="age" style=" padding-top: 10px; position: sticky;">
                    <div class="box">
                      <div class="box-header">
                        Age Comparison Graph
                      </div>
                      <div class="box-body">
                        <div id="age_container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        Graph of Age comparion from company's Employee. Shown in Ring Graph from Accumulated Employee's Age.Data will updated regularly each twelves month (one Year).
                      </div>
                      <div class="box-footer">
                        PT. Telkom Indonesia
                      </div>
                    </div>
                  </div>
                  <div class="col-4"></div>
                  <div class="col-8" id="divperf" style=" padding-top: 10px; position: sticky;">
                    <div class="box">
                      <div class="box-header">
                        Division Performance Graph
                      </div>
                      <div class="box-body">
                        <div id="divperform_container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        Graph of Division's Performance. Data Accumulated from Division's Grade from Company Chief. Data will be updated once a month
                      </div>
                      <div class="box-footer">
                        PT. Telkom Indonesia
                      </div>
                    </div>
                  </div>
                  <div class="col-4"></div>
                  <div class="col-8" id="newout" style=" padding-top: 10px; position: sticky;">
                    <div class="box">
                      <div class="box-header">
                        Employee In and Out Graph
                      </div>
                      <div class="box-body">
                        <div id="newout_container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        Graph of Newcomer and Retired Employees Ration. Data Accumulated from total of New Employees and Resigned Employees every Month. Data will be updated once a month and Graph will be updated once in a year.
                      </div>
                      <div class="box-footer">
                        PT. Telkom Indonesia
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
  <script>
  	function atMuncul() {
        $('#all1').css({'background-color': ''});
        $('#att1').css({'background-color': '#ee2e24'});
        $('#hrdiv1').css({'background-color': ''});
        $('#age1').css({'background-color': ''});
        $('#divperf1').css({'background-color': ''});
        $('#newout1').css({'background-color': ''});
        $(".col-4").hide(1000);
        $("#listGraph").show(1000);
        $("#att").show(1000);
        $("#hrdiv").hide(1000);
        $("#age").hide(1000);
        $("#divperf").hide(1000);
        $("#newout").hide(1000);
        }

    function hrMuncul() {
        $('#all1').css({'background-color': ''});
        $('#att1').css({'background-color': ''});
        $('#hrdiv1').css({'background-color': '#ee2e24'});
        $('#age1').css({'background-color': ''});
        $('#divperf1').css({'background-color': ''});
        $('#newout1').css({'background-color': ''});
        $(".col-4").hide(1000);
        $("#listGraph").show(1000);
        $('#hrdiv').css({'padding-top': '0px'});
        $("#att").hide(1000);
        $("#hrdiv").show(1000);
        $("#age").hide(1000);
        $("#divperf").hide(1000);
        $("#newout").hide(1000);
        }

    function ageMuncul() {
        $('#all1').css({'background-color': ''});
        $('#att1').css({'background-color': ''});
        $('#hrdiv1').css({'background-color': ''});
        $('#age1').css({'background-color': '#ee2e24'});
        $('#divperf1').css({'background-color': ''});
        $('#newout1').css({'background-color': ''});
        $('#age').css({'padding-top': '0px'});
        $(".col-4").hide(1000);
        $("#listGraph").show(1000);
        $("#att").hide(1000);
        $("#hrdiv").hide(1000);
        $("#age").show(1000);
        $("#divperf").hide(1000);
        $("#newout").hide(1000);
        }

    function divMuncul() {
        $('#all1').css({'background-color': ''});
        $('#att1').css({'background-color': ''});
        $('#hrdiv1').css({'background-color': ''});
        $('#age1').css({'background-color': ''});
        $('#divperf1').css({'background-color': '#ee2e24'});
        $('#newout1').css({'background-color': ''});
        $('#divperf').css({'padding-top': '0px'});
        $(".col-4").hide(1000);
        $("#listGraph").show(1000);
        $("#att").hide(1000);
        $("#hrdiv").hide(1000);
        $("#age").hide(1000);
        $("#divperf").show(1000);
        $("#newout").hide(1000);
      }

    function newoutMuncul() {
        $('#all1').css({'background-color': ''});
        $('#att1').css({'background-color': ''});
        $('#hrdiv1').css({'background-color': ''});
        $('#age1').css({'background-color': ''});
        $('#divperf1').css({'background-color': ''});
        $('#newout1').css({'background-color': '#ee2e24'});
        $('#newout').css({'padding-top': '0px'});
        $(".col-4").hide(1000);
        $("#listGraph").show(1000);
        $("#att").hide(1000);
        $("#hrdiv").hide(1000);
        $("#age").hide(1000);
        $("#divperf").hide(1000);
        $("#newout").show(1000);
        }

    function Muncul() {
        $('#all1').css({'background-color': '#ee2e24'});
        $('#att1').css({'background-color': ''});
        $('#hrdiv1').css({'background-color': ''});
        $('#age1').css({'background-color': ''});
        $('#divperf1').css({'background-color': ''});
        $('#newout1').css({'background-color': ''});
        $('#hrdiv').css({'padding-top': '10px'});
        $('#age').css({'padding-top': '10px'});
        $('#divperf').css({'padding-top': '10px'});
        $('#newout').css({'padding-top': '10px'});
        $(".col-4").show(1000);
        $("#listGraph").show(1000);
        $("#att").show(1000);
        $("#hrdiv").show(1000);
        $("#age").show(1000);
        $("#divperf").show(1000);
        $("#newout").show(1000);
        }

    $(function () {
        $('#att_container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Employee Attendance'
            },
            <?php 
              $sql_a = mysqli_query($db,"SELECT * FROM absensi ORDER BY absensi.id_absen ASC");
              $sql_k = mysqli_query($db,"SELECT persentase FROM absensi WHERE jabatan = 'Karyawan'");
              $sql_m = mysqli_query($db,"SELECT persentase FROM absensi WHERE jabatan = 'Manager'");
              $sql_v = mysqli_query($db,"SELECT persentase FROM absensi WHERE jabatan = 'Vice'");

              $k=0;
              while($rowk = mysqli_fetch_array($sql_k)) {             
                  $datak[$k]['persentase'] = $rowk['persentase'];
                    $k++;
              }

              $m=0;
              while($rowm = mysqli_fetch_array($sql_m)) {             
                  $datam[$m]['persentase'] = $rowm['persentase'];
                    $m++;
              }

              $v=0;
              while($rowv = mysqli_fetch_array($sql_v)) {             
                  $datav[$v]['persentase'] = $rowv['persentase'];
                    $v++;
              }

              $y = 0;
              while($row_a = mysqli_fetch_array($sql_a)) {             
                  $dataa[$y]['jabatan'] = $row_a['jabatan'];
                  $dataa[$y]['bulan'] = $row_a['bulan'];
                  $y++;
              }
            ?>
            subtitle: {
                text: 'Month <?php echo $dataa[0]['bulan']?>' 
            },
            xAxis: {
                categories: [
                    '1',
                    '2',
                    '3',
                    '4',
                    '5'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Employee Attendance Percentage'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: '<?php echo $dataa[0]['jabatan']?>',
                data: [<?php echo $datak[0]['persentase']?>, 
                <?php echo $datak[1]['persentase']?>, 
                <?php echo $datak[2]['persentase']?>, 
                <?php echo $datak[3]['persentase']?>,
                <?php echo $datak[4]['persentase']?> ]

            }, {
                name: '<?php echo $dataa[1]['jabatan']?>',
                data: [<?php echo $datam[0]['persentase']?>, 
                <?php echo $datam[1]['persentase']?>, 
                <?php echo $datam[2]['persentase']?>, 
                <?php echo $datam[3]['persentase']?>,
                <?php echo $datam[4]['persentase']?> ]

            }, {
                name: '<?php echo $dataa[2]['jabatan']?>',
                data: [<?php echo $datav[0]['persentase']?>, 
                <?php echo $datav[1]['persentase']?>, 
                <?php echo $datav[2]['persentase']?>, 
                <?php echo $datav[3]['persentase']?>,
                <?php echo $datav[4]['persentase']?> ]

            }]
        });
        $('#hrdiv_container').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Human Resource per Division'
            },
            <?php 
              $sql = mysqli_query($db,"SELECT * FROM sdm");

              $x = 0;
              while($row = mysqli_fetch_array($sql)) {             
                  $data[$x]['nama_divisi'] = $row['nama_divisi'];
                  $data[$x]['jumlah_karyawan'] = $row['jumlah_karyawan'];
                  $x++;
              }
            ?>
            xAxis: {
                categories: ['<?php echo $data[0]["nama_divisi"] ?>', '<?php echo $data[1]["nama_divisi"] ?>', '<?php echo $data[2]["nama_divisi"] ?>', '<?php echo $data[3]["nama_divisi"] ?>', '<?php echo $data[4]["nama_divisi"] ?>']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Human Resource'
                }
            },
            legend: {
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            series: [{
                name: 'Employee',
                data: [<?php echo $data[0]["jumlah_karyawan"] ?>, <?php echo $data[1]["jumlah_karyawan"] ?>, <?php echo $data[2]["jumlah_karyawan"] ?>, <?php echo $data[3]["jumlah_karyawan"] ?>, <?php echo $data[4]["jumlah_karyawan"] ?>]
            }]
        });
        $('#age_container').highcharts({
            chart: {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
            },
            title: {
                text: 'Employees Age Ratio in 2018'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            <?php 
              $sql_u1 = mysqli_query($db,"SELECT COUNT(umur) FROM karyawan WHERE umur < 20 ");
              $sql_u2 = mysqli_query($db,"SELECT COUNT(umur) FROM karyawan WHERE umur >=20 and umur <=25 ");
              $sql_u3 = mysqli_query($db,"SELECT COUNT(umur) FROM karyawan WHERE umur >=26 and umur <=30 ");
              $sql_u4 = mysqli_query($db,"SELECT COUNT(umur) FROM karyawan WHERE umur >=31 and umur <=35 ");
              $sql_u5 = mysqli_query($db,"SELECT COUNT(umur) FROM karyawan WHERE umur >=36 and umur <40 ");
              $sql_u6 = mysqli_query($db,"SELECT COUNT(umur) FROM karyawan WHERE umur >40 ");

              $dataUmur1 = mysqli_fetch_array($sql_u1);
              $dataUmur2 = mysqli_fetch_array($sql_u2);
              $dataUmur3 = mysqli_fetch_array($sql_u3);
              $dataUmur4 = mysqli_fetch_array($sql_u4);
              $dataUmur5 = mysqli_fetch_array($sql_u5);
              $dataUmur6 = mysqli_fetch_array($sql_u6);
           
            ?>
            series: [{
                name: 'Age',
                colorByPoint: true,
                data: [{
                    name: 'Below 20',
                    y: <?php echo $dataUmur1[0] ?>
                }, {
                    name: '20-25',
                    y: <?php echo $dataUmur2[0] ?>,
                    sliced: true,
                    selected: true
                }, {
                    name: '26-30',
                    y: <?php echo $dataUmur3[0] ?>
                }, {
                    name: '30-35',
                    y: <?php echo $dataUmur4[0] ?>
                }, {
                    name: '36-40',
                    y: <?php echo $dataUmur5[0] ?>
                }, {
                    name: 'Above 40',
                    y: <?php echo $dataUmur6[0] ?>
                }]
            }]
        });
        $('#divperform_container').highcharts({
              chart: {
                  type: 'bar'
              },
              title: {
                  text: 'Division Performance'
              },
              subtitle: {
                  text: 'Month March'
              },
              <?php 
              $sql2 = mysqli_query($db,"SELECT * FROM sdm");

              $x2 = 0;
              while($row2 = mysqli_fetch_array($sql2)) {             
                  $data2[$x2]['nama_divisi'] = $row2['nama_divisi'];
                  $data2[$x2]['Aktivitas'] = $row2['Aktivitas'];
                  $data2[$x2]['Solidaritas'] = $row2['Solidaritas'];
                  $data2[$x2]['Output'] = $row2['Output'];
                  $data2[$x2]['Performansi'] = $row2['Performansi'];
                  $data2[$x2]['lainnya'] = $row2['lainnya'];
                  $x2++;
              }
            ?>
              xAxis: {
                  categories: ['<?php echo $data2[0]['nama_divisi'] ?>', 
                  '<?php echo $data2[1]['nama_divisi'] ?>', 
                  '<?php echo $data2[2]['nama_divisi'] ?>', 
                  '<?php echo $data2[3]['nama_divisi'] ?>', 
                  '<?php echo $data2[4]['nama_divisi'] ?>'],
                  title: {
                      text: null
                  }
              },
              yAxis: {
                  min: 0,
                  title: {
                      text: 'Quality',
                      align: 'high'
                  },
                  labels: {
                      overflow: 'justify'
                  }
              },
              tooltip: {
                  valueSuffix: ' percent'
              },
              plotOptions: {
                  bar: {
                      dataLabels: {
                          enabled: true
                      }
                  }
              },
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'top',
                  x: -10,
                  y: 80,
                  floating: true,
                  borderWidth: 1,
                  backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                  shadow: true
              },
              credits: {
                  enabled: false
              },
              series: [{
                  name: 'Activity',
                  data: [<?php echo $data2[0]['Aktivitas'] ?>, 
                  <?php echo $data2[1]['Aktivitas'] ?>, 
                  <?php echo $data2[2]['Aktivitas'] ?>, 
                  <?php echo $data2[3]['Aktivitas'] ?>, 
                  <?php echo $data2[4]['Aktivitas'] ?>]
              }, {
                  name: 'Solidarity',
                  data: [<?php echo $data2[0]['Solidaritas'] ?>, 
                  <?php echo $data2[1]['Solidaritas'] ?>, 
                  <?php echo $data2[2]['Solidaritas'] ?>, 
                  <?php echo $data2[3]['Solidaritas'] ?>, 
                  <?php echo $data2[4]['Solidaritas'] ?>]
              }, {
                  name: 'Output',
                  data: [<?php echo $data2[0]['Output'] ?>, 
                  <?php echo $data2[1]['Output'] ?>, 
                  <?php echo $data2[2]['Output'] ?>, 
                  <?php echo $data2[3]['Output'] ?>, 
                  <?php echo $data2[4]['Output'] ?>]
              }, {
                  name: 'Performance',
                  data: [<?php echo $data2[0]['Performansi'] ?>, 
                  <?php echo $data2[1]['Performansi'] ?>, 
                  <?php echo $data2[2]['Performansi'] ?>, 
                  <?php echo $data2[3]['Performansi'] ?>, 
                  <?php echo $data2[4]['Performansi'] ?>]
              },{
                  name: 'Others',
                  data: [<?php echo $data2[0]['lainnya'] ?>, 
                  <?php echo $data2[1]['lainnya'] ?>, 
                  <?php echo $data2[2]['lainnya'] ?>, 
                  <?php echo $data2[3]['lainnya'] ?>, 
                  <?php echo $data2[4]['lainnya'] ?>]
              }]
          });
        $('#newout_container').highcharts({
          chart: {
                type: 'column'
            },
            title: {
                text: 'Newcomer and Suspended Employees'
            },
            subtitle: {
                text: 'Year 2018'
            },
            <?php 
              $sql_n = mysqli_query($db,"SELECT * FROM status_karyawan");
              $a = 0;
              while($row_n = mysqli_fetch_array($sql_n)) {             
                  $datan[$a]['jumlah_pecat'] = $row_n['jumlah_pecat'];
                  $datan[$a]['jumlah_baru'] = $row_n['jumlah_baru'];
                  $datan[$a]['bulan'] = $row_n['bulan'];
                  $a++;
              }
            ?>
            xAxis: {
                categories: [
                    '<?php echo $datan[0]["bulan"] ?>',
                    '<?php echo $datan[1]["bulan"] ?>',
                    '<?php echo $datan[2]["bulan"] ?>',
                    '<?php echo $datan[3]["bulan"] ?>',
                    '<?php echo $datan[4]["bulan"] ?>',
                    '<?php echo $datan[5]["bulan"] ?>',
                    '<?php echo $datan[6]["bulan"] ?>',
                    '<?php echo $datan[7]["bulan"] ?>',
                    '<?php echo $datan[8]["bulan"] ?>',
                    '<?php echo $datan[9]["bulan"] ?>',
                    '<?php echo $datan[10]["bulan"] ?>',
                    '<?php echo $datan[11]["bulan"] ?>'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Employee Suspension and Newcomer Percentage'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Fired Employees',
                data: [
                <?php echo $datan[0]["jumlah_pecat"] ?>,
                <?php echo $datan[1]["jumlah_pecat"] ?>, 
                <?php echo $datan[2]["jumlah_pecat"] ?>, 
                <?php echo $datan[3]["jumlah_pecat"] ?>, 
                <?php echo $datan[4]["jumlah_pecat"] ?>, 
                <?php echo $datan[5]["jumlah_pecat"] ?>, 
                <?php echo $datan[6]["jumlah_pecat"] ?>, 
                <?php echo $datan[7]["jumlah_pecat"] ?>, 
                <?php echo $datan[8]["jumlah_pecat"] ?>,
                <?php echo $datan[9]["jumlah_pecat"] ?>, 
                <?php echo $datan[10]["jumlah_pecat"] ?>, 
                <?php echo $datan[11]["jumlah_pecat"] ?>]

            }, {
                name: 'New Employees',
                data: [
                <?php echo $datan[0]["jumlah_baru"] ?>, 
                <?php echo $datan[1]["jumlah_baru"] ?>, 
                <?php echo $datan[2]["jumlah_baru"] ?>, 
                <?php echo $datan[3]["jumlah_baru"] ?>, 
                <?php echo $datan[4]["jumlah_baru"] ?>, 
                <?php echo $datan[5]["jumlah_baru"] ?>, 
                <?php echo $datan[6]["jumlah_baru"] ?>, 
                <?php echo $datan[7]["jumlah_baru"] ?>, 
                <?php echo $datan[8]["jumlah_baru"] ?>, 
                <?php echo $datan[9]["jumlah_baru"] ?>,
                <?php echo $datan[10]["jumlah_baru"] ?>, 
                <?php echo $datan[11]["jumlah_baru"] ?>]

            }]
        });
    });
  </script>
</html>
