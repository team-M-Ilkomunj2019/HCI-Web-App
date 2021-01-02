<!-- My CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/twitter.css">


<title>Daftar dengan Twitter</title>
</head>

<body>
    <div class="ws">
        <img class="logo" src="<?= base_url(); ?>assets/img/sun.png" alt="logo">
        <h1> smht </h1>
        <p class="slogan"> Be Smart, Be Wise </p>


        <div class="container">
            <img class="logo-tw" src="<?= base_url(); ?>assets/img/twitter2.png" alt="">
            <h3> Daftar dengan Twitter </h3>
            <form action="<?= base_url(); ?>Twitter" method="post">
                <input class="box1" type="text" id="email" name="email" placeholder="Nomor Telepon, Email, atau Username"><br>
                <input class="box2" type="text" id="password" name="password" placeholder="Kata Sandi"><br>
                <button class="setuju" type="submit"> Setuju & Bergabung </button>
                <h2> Sudah bergabung di Social Media's Happening Term? <a href="<?= base_url(); ?>auth"> Login </a> </h2>
            </form>
        </div>
    </div>

    <div class="footer">
        <footer>

            << href="<?= base_url(); ?>hubungikami">
                <p class="hub">Hubungi Kami</p>
                </>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>