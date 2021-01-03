<!-- My CSS -->
<link rel="stylesheet" href="<?= base_url();  ?>assets/css/istilah.css">


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
                <a class="nav-link active pojokataskanan" href="<?= base_url(); ?>Kontributor" role="button"> Jadilah kontributor<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?= base_url(); ?>Auth">Login</a>
                <a class="nav-link2" href="<?= base_url(); ?>auth/registration">Register</a>
            </div>
        </div>
    </nav>

    <div class="box">




        <div class="istilah-tren">
            <p class="judulnya"> Istilah-istilah Tren Untuk Anda <br> <span style="font-size: 15px; margin-top: 0px; padding-top:0%; "> Login untuk dapat mengakses semua istilah </span> </p>
        </div>

        <a href="<?= base_url('sorry'); ?>"><button class="box1">
                Dark Jokes
            </button></a>

        <a href="<?= base_url('sorry'); ?>"><button class="box2">
                Salty
            </button></a>

        <a href="<?= base_url('sorry'); ?>"><button class="box3">
                Toxic
            </button></a>

        <a href="<?= base_url('sorry'); ?>"><button class="box4">
                SJW
            </button></a>

        <a class="link pojokataskanan" role="button" href="<?= base_url(); ?>Openminded"> <button class="box5">
                Open-minded
            </button></a>

        <a href="<?= base_url('sorry'); ?>"><button class="box6">
                CMIIW
            </button></a>

        <a href="<?= base_url('sorry'); ?>"><button class="box7">
                FYI
            </button></a>

        <a href="<?= base_url('sorry'); ?>"><button class="box8">
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



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>