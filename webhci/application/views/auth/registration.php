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

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/registration.css">

    <title>Daftar SMHT</title>
</head>

<body>
    <div class="ws">
        <img class="logo" src="<?= base_url(); ?>assets/img/sun.png" alt="logo">
        <h1> smht </h1>
        <p class="slogan"> Be Smart, Be Wise </p>


        <div class="container">
            <form action="<?= base_url(); ?>auth/registration" method="post">
                <label for="email" class="l1"> Email atau Nomor Ponsel </label><br>
                <input class="box1" type="text" id="email" name="email"><br>
                <br>
                <br>
                <br><small class="text-danger"><?= form_error('email'); ?></small>
                <label for="password" class="l2"> Kata Sandi (sedikitnya 6 karakter) </label><br>
                <input class="box2" id="password" name="password" type="password"><br>
                <br>
                <small class="text-danger"><?= form_error('password'); ?></small>
                <button class="setuju" type="submit"> Setuju Bergabung </button>
                <h2> Sudah bergabung di Social Media's Happening Term? <a href="<?= base_url(); ?>auth"> Login </a> </h2>
            </form>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>