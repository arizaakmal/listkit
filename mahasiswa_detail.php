<?php
$arr_judul = ['Nama Lengkap', 'Jenis Kelamin', 'Agama', 'Asal Kampus', 'No Handphone', 'Email', 'Alamat', 'Tempat dan Tanggal Lahir', 'Sosial Media (Instagram)'];

$obj_person = new Person();
$data = $obj_person->view($_GET['id']);
?>

<!-- Project Start -->
<!-- Get In Touch Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay=".3s">
    <div class="container py-5">
        <div class="bg-light px-4 py-5 rounded">
            <div class="text-center mb-3">
                <h1 class="display-5">Biodata</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 text-center">
                    <?php
                    if (!empty($data['foto'])) {
                    ?>
                        <img src="img/<?= $data['foto']; ?>" class="img-fluid rounded-circle" alt="" />
                    <?php
                    } else {
                    ?>
                        <img src="img/no-photo.gif" class="img-fluid w-75 rounded-circle" alt="" />
                    <?php } ?>
                </div>
                <div class="col-lg-8">
                    <ul type="none" class="fs-5">
                        <li class="mb-2">
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>Nama Lengkap:</strong>
                            <span><?= $data['nama']; ?></span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>Jenis Kelamin:</strong>
                            <span>
                                <?php
                                if ($data['gender'] === 'L') {
                                    echo 'Laki-laki';
                                } elseif ($data['gender'] === 'P') {
                                    echo 'Perempuan';
                                } else {
                                    echo 'Tidak diketahui';
                                }
                                ?>
                            </span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>Agama:</strong>
                            <span><?= $data['nama_agama']; ?></span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>Asal Kampus:</strong>
                            <span><?= $data['asal_kampus']; ?></span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>No Handphone:</strong>
                            <span><?= $data['hp']; ?></span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>Email:</strong>
                            <span><?= $data['email']; ?></span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>Alamat:</strong>
                            <span><?= $data['alamat']; ?></span>
                        </li>
                        <li class="mb-2">
                            <?php
                            $tgl_lahir = date("d F Y", strtotime($data['tgl_lahir']));
                            ?>
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>Tempat dan Tanggal Lahir:</strong>
                            <span><?= $data['tempat_lahir'] . ', ' . $tgl_lahir; ?></span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-chevron-right me-2"></i>
                            <strong>Instagram:</strong>
                            <span><?= $data['sosmed']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch End -->

<!-- Project End -->