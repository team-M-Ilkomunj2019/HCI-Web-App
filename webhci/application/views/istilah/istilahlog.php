<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/istilahlog.css">


    <title>Istilah-istilah yang Sedang Trending</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <img class="logo" src="<?= base_url(); ?>assets/img/sun.png" alt="">
        <h2> smht </h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="<?= base_url(); ?>kuesioner">Kuesioner</a>

                <a class="nav-link active pojokataskanan" href="<?= base_url(); ?>Kontributorlog" role="button">Jadilah kontributor <span class="sr-only">(current)</span></a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= $users['email']; ?></a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="<?= base_url(); ?>auth/logout">Keluar</a>
                    </div>
            </div>
    </nav>

    <div class="box">



        <div class="istilah-tren">
            <p class="judulnya"> Istilah-istilah Tren Untuk Anda </p>
        </div>

        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Darkjokelog"> <button class="box1">
                Dark Jokes
            </button></a>

        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Saltylog"><button class="box2">
                Salty
            </button></a>

        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Toxiclog"> <button class="box3">
                Toxic
            </button></a>

        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Sjwlog"><button class="box4">
                SJW
            </button></a>

        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Openmindedlog">
            <button class="box5"> Open-minded
            </button></a>

        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Cmiiwlog"> <button class="box6">
                CMIIW
            </button></a>


        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Fyilog"><button class="box7"> FYI
            </button></a>

        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Iykwimlog"> <button class="box8">
                IYKWIM
            </button></a>


    </div>

    <div class="before-footer">
        <img class="sun" src="<?= base_url(); ?>assets/img/sun.png" alt="">
        <h3 class="nama"> smht </h3>
        <img class="email" src="<?= base_url(); ?>assets/img/email.svg" alt="">
        <h2 class="tim-m"> teamhcim@gmail.com </h2>
        <p class="follow"> Follow Us : </p>
        <a href="https://web.facebook.com/teamm.hci/"><img class="fb" src="<?= base_url(); ?>assets/img/facebook-brands.svg" alt=""></a>
        <a href="https://www.instagram.com/teammhci/"><img class="ig" src="<?= base_url(); ?>assets/img/instagram.png" alt=""></a>
        <a href="https://www.youtube.com/channel/UCtQNI1elOojPX6Q7oxyRalA"><img class="yt" src="<?= base_url(); ?>assets/img/youtube.png" alt=""></a>
        <a href="https://twitter.com/teammhci"> <img class="tw" src="<?= base_url(); ?>assets/img/twitter.png" alt=""></a>
    </div>

    <div class="footer">
        <footer>
            <a href="<?= base_url(); ?>hubungikamilog">
                <p class="hub">Hubungi Kami</p>
            </a>
            <a href="<?= base_url('tentangkamilog'); ?>">
                <p class="ten">Tentang Kami</p>
            </a>
            <a href="<?= base_url('kritiksaranlog'); ?>">
                <p class="kri">Kritik dan Saran</p>
            </a>
            <p class="cr"> &copy; 2020, Team M, All Rights Reserved</p>
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>