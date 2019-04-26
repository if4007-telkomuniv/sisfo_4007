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
                                    CashBank
                                </div>
                                <!-- Subtitle opsional, tapi bila ingin diberi, jelaskan page anda dalam maks 8 kata -->
                                <div class="page-subtitle">
                                </div>
                            </div>
                            <!-- Silakan masukkan code tampilan divisi Anda di bagian ini. -->
                            <!-- Dibawah ini adalah template box yang kalian bisa pakai untuk pengembangan sistem -->
                            <!--tab pemasukkan-->
                            <div class="col-12">
                                <table id="table_id" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Keterangan</th>
                                            <th>January</th>
                                            <th>Febuary</th>
                                            <th>Maret</th>
                                            <th>April</th>
                                            <th>Mei</th>
                                            <th>Juni</th>
                                            <th>July</th>
                                            <th>Agustus</th>
                                            <th>September</th>
                                            <th>Oktober</th>
                                            <th>November</th>
                                            <th>Desember</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Debit</td>
                                            <?php
                                            $bln = 1;
                                            while ($bln <= 12) {
                                                $a = 0;
                                                $b = 0;
                                                foreach ($cashbank as $row) {
                                                    $tgl = intval(date("m", strtotime($row->tanggal)));
                                                    if ($tgl == $bln) {
                                                        $a = $row->debit + $a;
                                                    }
                                                }?>
                                                <td><?php echo $a ?></td>
                                                <?php $bln = $bln + 1;
                                            } ?>
                                        </tr>
                                        <tr>
                                            <td>Kredit</td>
                                            <?php
                                            $bln = 1;
                                            while ($bln <= 12) {
                                                $a = 0;
                                                $b = 0;
                                                foreach ($cashbank as $row) {
                                                    if (intval(date("m", strtotime($row->tanggal))) == $bln) {
                                                        $a = $row->kredit;
                                                    }
                                                }?>
                                                    <td><?php echo $a ?></td>

                                                    <?php $bln = $bln + 1;
                                            } ?>
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
            $('#table_id').DataTable({
            });
        });
    </script>
</body>

</html>