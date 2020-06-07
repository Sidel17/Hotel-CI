<?php
$data = file_get_contents('data/hotel.json');
$menu = json_decode($data, true);

$menu=$menu["menu"];
?>

<div class="container">
    <div class="row mt-3">
        <h3>Daftar Room</h3>
    

    <div class="row">
    <?php foreach($menu as $row):?>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="img/menu/<?= $row["gambar"]; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row["type"]; ?></h5>
                    <p class="card-text"><?= $row["description"]; ?></p>
                    <h5 class="card-title">Rp. <?= $row["price"]; ?>.000</h5>
                </div>
            </div>
           
        </div>
    <?php endforeach;?>

    </div>

    </div>