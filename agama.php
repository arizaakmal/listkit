<?php

//ciptakan object dari class Jenis
$obj_agama = new Agama();
//panggil fungsionalitas terkait
$data = $obj_agama->index();
//print_r($rs); die();
?>

<!-- Project Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Agama</h5>
            <h1 class="display-5">List Seluruh Agama</h1>
        </div>
        <div class="row g-5">
            <?php
            foreach ($data as $row) {
            ?>
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-left bg-dark"></div>
                        <div class="project-right bg-dark"></div>
                        <img src="img/agama/<?= $row['foto']; ?>" class="img-fluid h-100" alt="img">
                        <a class="fs-4 fw-bold text-center"><?= $row['nama']; ?></a>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>
<!-- Project End -->