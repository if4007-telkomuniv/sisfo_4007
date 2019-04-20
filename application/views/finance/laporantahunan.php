<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php $this->load->view('base_layout/head_tag'); ?>
    <title>Index Finance</title>
    <!-- Input CSS atau JS yang dibutuhkan setelah line ini -->
    <!-- Taruh file css di folder /css-->
    <!-- Taruh file js di /js-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <!-- Contoh cara input css, ganti sesuai kebutuhan -->
    <?php /* echo link_tag('css/base_styles.css') */ ?>
    <?php echo link_tag('css/finance.css') ?>
    <?php /* echo link_tag('css/finance.css') */ ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                                    Laporan Tahunan
                                </div>
                                <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                                <div class="page-subtitle">
                                </div>
                            </div>
                            <div class="col-12">
                                
                            </div>
                            <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
                            <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                            <!--tab pemasukkan-->
                            <div class="col-12">
                                <table id="table_id" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Blanko</th>
                                            <th>Keperluan</th>
                                            <th>Tanggal</th>
                                            <th>Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $a = 0;
                                        foreach ($pemasukan as $row) { ?>
                                            <tr>
                                                <td><?php echo $row->blanko; ?></td>
                                                <td><?php echo $row->keperluan; ?></td>
                                                <td><?php echo $row->tanggal; ?></td>
                                                <td>Rp. <?php echo number_format($row->kredit,2); ?></td>
                                                <?php $a = $a + $row->kredit; ?>
                                            </tr>
                                        <?php }
                                        ?>
                                        <tr>
                                            <th colspan="3">Total</th>
                                            <td style="display: none;"></td>
                                            <td style="display: none;"></td>
                                            <th>Rp. <?php echo number_format($a,2); ?></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('base_layout/js_mandatory') ?>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>