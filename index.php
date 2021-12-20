<?php

// $data = file_get_contents('https://api-sekolah-indonesia.herokuapp.com/sekolah?page=1&perPage=5');
// $menu = json_decode($data, true);
// print_r($menu);
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);
$menu = $menu['menu'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIE Resto</title>
    <link rel="stylesheet" href="assets/bootstrap.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">All Menu</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>
        <div class="row mt-3">
            <?php foreach ($menu as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="img/menu/<?= $row['gambar']; ?>" class=" card-img-top" style="height: 22rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['nama']; ?></h5>
                            <p class="card-text" style="height: 4rem;"><?= $row['deskripsi']; ?></p>
                            <h5 class="card-title">Rp. <?= $row['harga']; ?></h5>
                            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>






    <script src="assets/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap.bundle.js"></script>
</body>

</html>