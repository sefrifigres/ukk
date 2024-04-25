<?php include 'koneksi.php'; session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK 2024</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="?url=home">Gallery Foto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="?url=home">Home</a>
            <?php if(isset($_SESSION['user_id'])): ?>
            <a class="nav-link" href="?url=upload">Upload</a>
            <a class="nav-link" href="?url=album">Album</a>
            <a class="nav-link" href="?url=profile"><?= ucwords($_SESSION['username']) ?></a>
            <a href="?url=logout" class="nav-link">Logout</a>
            <?php else: ?>
            <a class="nav-link" href="login.php">Login</a>
            <a class="nav-link" href="daftar.php">Daftar</a>
            <?php endif; ?>
        </div>
        </div>
    </div>
    </nav>
    <?php 
        $url=@$_GET["url"];
        if($url=='home'){
            include 'page/home.php';
        }elseif($url=='profile'){
            include 'page/profil.php';
        }else if($url=='upload'){
            include 'page/upload.php';
        }else if($url=='album'){
            include 'page/album.php';
        }else if($url=='like'){
            include 'page/like.php';
        }else if($url=='komentar'){
            include 'page/komentar.php';
        }else if($url=='detail'){
            include 'page/detail.php';
        }else if($url=='kategori'){
            include 'page/kategori.php';
        }else if($url=='logout'){
            session_destroy();
            header("Location: ?url=home");
        }else{
            include 'page/home.php';
        }
    ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <div class="col-xl-12">
    <p class="copy_right text-center">
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     UKK SMKN 11 Malang <i class="fa fa-heart-o" aria-hidden="true"></i>by Sefri Figres </a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>
   </div>
</body>
</html>