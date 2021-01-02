<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/homelogin.css">


    <title>Social Media's Happening Term</title>
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light ">
        <img class="logo" src="<?= base_url(); ?>assets/img/sun.png" alt="">
        <h2> smht </h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?= $users['email']; ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profil Saya</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>auth/logout">Keluar</a>
                    </div>
            </div>
        </div>
    </nav>

    </nav>
    <!-- Akhir navbar -->
    <?= $this->session->flashdata('message'); ?>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div id="box1"></div>
            <h1 class="display-4">SOCIAL MEDIA'S</h1>
            <h1 class="display-5">HAPPENING TERM</h1>
            <h1 class="display-6">Social Media's Happening Term adalah website untuk memberikan definisi dan pemahaman yang sesungguhnya mengenai istilah-istilah yang sedang terkenal atau sering digunakan kepada pengguna media sosial. </h1>
        </div>
    </div>

    <!-- Akhir Jumbotron -->

    <!-- workingspace -->
    <div class="workspace">
        <h1 class="yukcaritahu"> Yuk Cari Tahu! </h1>
        <hr>

        <a role="button" href="<?= base_url(); ?>Istilahlog"> <span class="hitam"><button class="fitur1" role="button"> Istilah apa yang sedang trending?</span></button></a>
        <a role="button" href="<?= base_url(); ?>Pentingistilahlog"><button class="fitur2" role="button"> <span class="hitam">Pentingnya memahami suatu istilah atau kata di media sosial dengan benar</span></button></a>
        <p class="search"> Langsung cari katanya! </p>

        <form action="<?= base_url(); ?>search/searching" method="POST">
            <input class="search2" type="text" name="cari" placeholder="Cari kata atau istilah">
            <input class="button4" type="submit" value="cari">
        </form>

        <p class="tidak-nemu"> Tidak menemukan apa yang Anda cari?</p>
        <a role="button" href="<?= base_url(); ?>Kontributorlog"> <button class="fitur3" role="button"> <span class="hitam">Apakah ada istilah yang belum kami punya?</span> </button></a>

        <img class="girl" src="<?= base_url(); ?>assets/img/girlz.png" alt="">
        <img class="boy" src="<?= base_url(); ?>assets/img/boyz.png" alt="">
    </div>
    <!-- akhir workingspace -->
    <?= $this->session->flashdata('kiw'); ?>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>