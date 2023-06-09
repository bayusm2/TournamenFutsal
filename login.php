<?php

require_once('function/helper.php');
require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tournamen Futsal HIMATIF</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css' ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <style>
    
    body {
      background: rgba(0, 0, 0, .5) url("gambar/wp4.jpg");
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
    }

    </style>
</head>

<body>
    <div class="topbar">
        <h3 class="text-topbar" style="text-align: center;">Tournamen Futsal HIMATIF</h3>
    </div>

    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Masuk</div>
                <div class="card-body">
                    <?php if ($process == 'successregister') : ?>
                        <div class="alert alert-success" style="background-color: green; padding: 1em; color: white;border-radius: 20px;">
                            Registrasi berhasil, silahkan masuk dengan akun anda
                        </div>
                    <?php endif; ?>
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>">
                        <label class="form-label">Nama</label>
                        <input type="username" name="username" class="form-input">
                        <label class="form-label">Kata Sandi</label>
                        <input type="password" name="password" class="form-input">
                        <button type="submit" class="btn btn-login">Masuk</button>
                    </form>
                    <p style="text-align: center;">Jika belum mempunyai akun <span><a href="register.php" class="">Daftar disini</a></span></p>
                    <p style="text-align: center;">Ada pertanyaan?<br> Hubungi <span><a href="https://wa.me/+628816317252">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>