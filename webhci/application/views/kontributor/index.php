<!-- My CSS -->
<link rel="stylesheet" href="<?= base_url();  ?>assets/css/kontributor.css">


<title>Jadilah Kontributor</title>
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

                <a class="nav-link" href="<?= base_url(); ?>Auth">Login</a>
                <a class="nav-link2" href="<?= base_url(); ?>auth/registration">Register</a>
            </div>
        </div>
    </nav>

    <div class="box">
        <p class="kontri"> Jadilah Kontributor! </p>
        <?= $this->session->flashdata('message'); ?>

        <form action="<?= base_url(); ?>Kontributor" method="post">
            <label for="email" class="l1"> Email* </label><br>
            <input class="box1" name="email" id="email" type="text"><br>
            <label for="password" class="l2"> Istilah atau kata yang belum ada di web SMHT* </label><br>
            <input class="box2" name="new_term" id="new_term" type="text"><br>
            <p class="info"> *Bidang wajib diisi</p>
            <button class="kirim" type="submit"> Kirim </button>
        </form>

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
            <a href="<?= base_url(); ?>hubungikami">
                <p class="hub">Hubungi Kami</p>
            </a>
            <a href="<?= base_url('tentangkami'); ?>">
                <p class="ten">Tentang Kami</p>
            </a>
            <a href="<?= base_url('kritiksaran'); ?>">
                <p class="kri">Kritik dan Saran</p>
            </a>
            <p class="cr"> &copy; 2020, Team M, All Rights Reserved</p>
        </footer>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->