<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>

<body>
    

    <div class="banner">
        <?php foreach ($banner as $b){?>
        <h1><?= $b['h1']?></h1>
        <p><?= $b['keterangan']?></p>
        <?php }?>
    </div>

    <div class="product">
        <a href=""><img src="src/img/singleplay.png" alt=""></a>
        <a href=""><img src="src/img/dualplay.png" alt=""></a>
        <a href=""><img src="src/img/tripleplay.png" alt=""></a>
        <a href=""><img src="src/img/bantuan.png" alt=""></a>
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
                <?php }?>
            </div>
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

    

    <script src="src/js/navbar.js"></script>
</body>

</html>
