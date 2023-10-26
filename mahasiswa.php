<?php
$arr_judul = ['No', 'Nama Lengkap', 'Jenis Kelamin', 'Agama', 'Asal Kampus', 'Aksi'];
//ciptakan object dari class Jenis
$obj_person = new Person();
//panggil fungsionalitas terkait
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $data = $obj_person->search($keyword);
} else {
    $data = $obj_person->index();
}
//print_r($rs); die();
?>


<!-- Project Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Mahasiswa</h5>
            <h1 class="display-5">List Data Seluruh Mahasiswa</h1>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="col d-flex">
                <a href="index.php?hal=form_mahasiswa" class="btn btn-success rounded-pill"><i class="fas fa-plus-circle"></i> Tambah Data</a>
                <div class="text-end border-dark search-btn w-25 ms-auto">
                    <div class="search-form">
                        <form method="GET">
                            <div class="form-group">
                                <div class="d-flex">
                                    <input type="search" class="form-control border-1 rounded-pill me-3" name="keyword" placeholder="Cari..." />
                                    <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search text-dark"></i></button>
                                    <input type="hidden" name="hal" value="mahasiswa" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay=".3s">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <?php
                        foreach ($arr_judul as $judul) {
                        ?>
                            <th scope="col"><?= $judul; ?></th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $mhs) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $mhs['nama']; ?></td>
                            <td><?= $mhs['gender']; ?></td>
                            <td><?= $mhs['nama_agama']; ?></td>
                            <td><?= $mhs['asal_kampus']; ?></td>
                            <td>
                                <form method="POST" action="mahasiswa_controller.php">
                                    <a href="index.php?hal=mahasiswa_detail&id=<?= $mhs['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a href="index.php?hal=form_mahasiswa&id=<?= $mhs['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda yakin dihapus?')"><i class="fas fa-trash"></i> Hapus</button>
                                    <input type="hidden" name="id" value="<?= $mhs['id'] ?>" />
                                </form>
                            </td>
                        </tr>

                    <?php $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Project End -->