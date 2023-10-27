<?php
$arr_judul = ['Nama Lengkap', 'Jenis Kelamin', 'Agama', 'Asal Kampus', 'No Handphone', 'Email', 'Alamat', 'Tempat dan Tanggal Lahir'];

$obj_person = new Person();
$data = $obj_person->view($_GET['id']);
?>


<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a class="text-dark fw-bold" href="index.php?hal=mahasiswa">Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <?php
                        if ($data['foto'] != null) {
                        ?>
                            <img src="img/mahasiswa/<?= $data['foto']; ?>" alt="avatar" class="rounded-circle border border-1 border-secondary img-fluid" style="width: 150px;">
                        <?php
                        } else {
                        ?>
                            <img src="img/no-photo.gif" alt="avatar" class="rounded-circle border border-1 border-secondary img-fluid" style="width: 150px;">
                        <?php   }
                        ?>

                        <h5 class="my-3"><?= $data['nama']; ?></h5>
                        <p class="text-muted mb-1">Full Stack Developer</p>
                        <p class="text-muted mb-4"><?= $data['alamat']; ?></p>

                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0"><?= $data['sosmed']; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Nama Lengkap</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $data['nama']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $data['email']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">No. Handphone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $data['hp']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    <?= $data['gender']; ?>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Agama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $data['nama_agama']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Asal Kampus</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $data['asal_kampus']; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Tempat/Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-9">
                                <?php
                                $tgl_lahir = date('j F Y', strtotime($data['tgl_lahir']));
                                ?>
                                <p class="text-muted mb-0"><?= $data['tempat_lahir'] . ', ' . $tgl_lahir; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0 fw-bold">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $data['alamat']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <div class="row p-3">
                            <div class="col text-center">
                                <p class="blockquote mb-0"><i class="fa fa-quote-left"></i> <?= $data['quotes']; ?> <i class="fa fa-quote-right"></i></p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project End -->