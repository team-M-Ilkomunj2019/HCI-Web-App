<!-- My CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/home.css">

<title>Social Media's Happening Term</title>
</head>

<body>
    <!-- Navbar -->
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
                </div>
            </div>
        </nav>

        </nav>
        <!-- Akhir navbar -->

        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div id="box1"></div>
                <h1 class="display-4">SOCIAL MEDIA'S</h1>
                <h1 class="display-5">HAPPENING TERM</h1>
                <h1 class="display-6">Social Media's Happening Term adalah website untuk memberikan definisi dan pemahaman yang sesungguhnya mengenai istilah-istilah yang sedang terkenal atau sering digunakan kepada pengguna media sosial. </h1>
                <a role="button" href="<?= base_url(); ?>auth/registration"> <button class="button1">
                        <span class="putih"> Daftar dengan Email</span>
                    </button></a>
                <a role="button" href="<?= base_url(); ?>Fb"><button class="button2"> <span class="putih"> Daftar dengan Facebook</span></button></a>
                <a role="button" href="<?= base_url(); ?>Twitter"> <button class="button3"> <span class="putih">Daftar dengan Twitter</span></button></a>
            </div>
        </div>

        <!-- Akhir Jumbotron -->

        <!-- workingspace -->
        <div class="workspace">
            <h1 class="yukcaritahu"> Yuk Cari Tahu! </h1>
            <hr>
            <a role="button" href="<?= base_url(); ?>Istilah"><button class="fitur1" role="button"> <span class="hitam">Istilah apa yang sedang trending?</span></button></a>
            <a role="button" href="<?= base_url(); ?>Pentingistilah"> <button class="fitur2" role="button"> <span class="hitam">Pentingnya memahami suatu istilah atau kata di media sosial dengan benar</span> </button></a>
            <p class="search"> Langsung cari katanya! </p>

            <form action="<?= base_url(); ?>search/searching" method="POST">
                <input class="search2" type="text" name="cari" placeholder="Cari kata atau istilah">
                <input class="button4" type="submit" value="cari">
            </form>

            <p class="tidak-nemu"> Tidak menemukan apa yang Anda cari?</p>
            <a role="button" href="<?= base_url(); ?>Kontributor"><button class="fitur3" role="button"> <span class="hitam">Apakah ada istilah yang belum kami punya?</span> </button></a>

            <img class="girl" src="<?= base_url(); ?>assets/img/girl.png" alt="">
            <img class="boy" src="<?= base_url(); ?>assets/img/boyz.png" alt="">
        </div>
        <!-- akhir workingspace -->

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