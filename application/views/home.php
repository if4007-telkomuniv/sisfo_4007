<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telkom Indonesia</title>

    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <nav id="navbar">
        <div class="nav-logo">
            <a href=""><img src="src/img/Telkom_Indonesia_2013.svg" alt="logo"></a>
        </div>
        <div class="nav-link">
            <a href="">Home</a>
            <a href="">Promo</a>
            <a href="">Pusat Bantuan</a>
        </div>
    </nav>

    <div class="banner">
        <?php foreach ($banner as $b){?>
        <h1><?= $b['h1']?></h1>
        <p><?= $b['keterangan']?></p>
        <?php }?>
        <a href="">lihat detail</a>
    </div>

    <div class="product">
        <a href=""><img src="src/img/apaituindihome.png" alt=""></a>
        <a href=""><img src="src/img/singleplay.png" alt=""></a>
        <a href=""><img src="src/img/dualplay.png" alt=""></a>
        <a href=""><img src="src/img/tripleplay.png" alt=""></a>
        <a href=""><img src="src/img/bantuan.png" alt=""></a>
        <a href=""><img src="src/img/group-9.png" alt=""></a>
    </div>

    <div class="paket">
        <div class="fantastic border-round">
            <h1>berlangganan paket fantastic deal</h1>
            <button class="button">lihat detail</button>
        </div>
        <div class="gemah border-round">
            <h1>berlangganan indihome paket gamer</h1>
            <button class="button">lihat detail</button>
        </div>
    </div>

    <div class="about">
        <div class="ttg">
            <div class="tentang">
                <img src="src/img/mt-1642-title-img.png" alt="">
                <h3>tentang telkom</h3>
            </div>
            <div class="p-tentang">
                <?php foreach ($about as $a){?>
                <h1><?= $a['title']?></h1>
                <p><?= $a['isi']?></p>
                <!-- <p>
                    Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di
                    bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di
                    Indonesia. Pemegang saham mayoritas Telkom adalah Pemerintah Republik Indonesia sebesar 52.09%,
                    sedangkan 47.91% sisanya dikuasai oleh publik. Saham Telkom diperdagangkan di Bursa Efek Indonesia
                    (BEI) dengan kode “TLKM” dan New York Stock Exchange (NYSE) dengan kode “TLK”.
                </p>

                <p>
                    upaya bertransformasi menjadi digital telecommunication company, TelkomGroup mengimplementasikan
                    strategi bisnis dan operasional perusahaan yang berorientasi kepada pelanggan (customer-oriented).
                    Transformasi tersebut akan membuat organisasi TelkomGroup menjadi lebih lean (ramping) dan agile
                    (lincah) dalam beradaptasi dengan perubahan industri telekomunikasi yang berlangsung sangat cepat.
                    Organisasi yang baru juga diharapkan dapat meningkatkan efisiensi dan efektivitas dalam menciptakan
                    customer experience yang berkualitas.
                </p>

                <p>
                    usaha TelkomGroup bertumbuh dan berubah seiring dengan perkembangan teknologi, informasi dan
                    digitalisasi, namun masih dalam koridor industri telekomunikasi dan informasi. Hal ini terlihat dari
                    lini bisnis yang terus berkembang melengkapi legacy yang sudah ada sebelumnya.
                </p>

                <p>
                    ini TelkomGroup mengelola 6 produk portofolio yang melayani empat segmen konsumen, yaitu korporat,
                    perumahan, perorangan dan segmen konsumen lainnya.
                </p> -->
                <?php }?>
            </div>
            <button class="button">lebih jelas</button>
        </div>
        <div class="about-img">
            <img src="src/img/telkom.JPG" alt="">
        </div>
    </div>

    <?php foreach ($article as $ar){
        echo '<article>
                <h1>'.$ar["title"].'</h1>
                <p>'.$ar["isi"].'</p>
             </article>';
    }?>
    <!-- <article>
        <h1>asalole</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </article> -->

    <footer>
        <span class="copyright">&copy 2019 <a href="">Telkom Indonesia</a></span>
    </footer>

    <script src="src/js/navbar.js"></script>
</body>

</html>