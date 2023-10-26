<?php
$obj_agama = new Agama();
$data = $obj_agama->index();
$arr_gender = ['L', 'P'];

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $obj_person = new Person();
    $row = $obj_person->view($id);
    $title = "Form Ubah Data Mahasiswa";
    //print_r($rs); die();
} else {
    $title = "Form Tambah Data Mahasiswa";
    $row = [];
}

?>


<!-- Project Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Mahasiswa</h5>
            <h1 class="display-5"><?= $title; ?></h1>
        </div>

        <div class="row g-5 wow fadeInUp justify-content-center" data-wow-delay=".3s">
            <div class="col-md-6">
                <form class="row g-3" action="mahasiswa_controller.php" method="POST">
                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= isset($_REQUEST['id']) ? $row['nama'] : '' ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= isset($_REQUEST['id']) ? $row['email'] : '' ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="hp" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" id="hp" name="hp" value="<?= isset($_REQUEST['id']) ? $row['hp'] : '' ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="asal_kampus" class="form-label">Asal Kampus</label>
                        <input type="text" class="form-control" id="asal_kampus" name="asal_kampus" value="<?= isset($_REQUEST['id']) ? $row['asal_kampus'] : '' ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="d-flex">
                            <?php
                            foreach ($arr_gender as $gender) {
                                $sel = (isset($_REQUEST['id']) && $gender == $row['gender']) ? "checked" : "";
                            ?>
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="<?= $gender ?>" <?= $sel; ?>>
                                    <label class="form-check-label" for="gender">
                                        <?php
                                        if ($gender == 'L') {
                                            echo "Laki-laki";
                                        } else {
                                            echo "Perempuan";
                                        }
                                        ?>
                                    </label>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="agama" class="form-label">Agama</label>
                        <select id="agama" class="form-select" name="agama">
                            <option selected>--- Pilih ---</option>
                            <?php
                            foreach ($data as $agama) {
                                $sel = ($agama['id'] == $row['agama_id']) ? "selected" : "";
                            ?>
                                <option value="<?= $agama['id']; ?>" <?= $sel ?>><?= $agama['nama']; ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= isset($_REQUEST['id']) ? $row['tempat_lahir'] : '' ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= isset($_REQUEST['id']) ? $row['tgl_lahir'] : '' ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="5" required><?= isset($_REQUEST['id']) ? $row['alamat'] : '' ?></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="sosmed" class="form-label">Sosial Media (Instagram)</label>
                        <input type="text" class="form-control" id="sosmed" name="sosmed" value="<?= isset($_REQUEST['id']) ? $row['sosmed'] : '' ?>" required>
                    </div>
                    <div class="col-md-12">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="text" class="form-control" id="foto" name="foto" value="<?= isset($_REQUEST['id']) ? $row['foto'] : '' ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="quotes" class="form-label">Quotes</label>
                        <textarea name="quotes" id="quotes" class="form-control" rows="5" required><?= isset($_REQUEST['id']) ? $row['quotes'] : '' ?></textarea>
                    </div>
                    <div class="col-12">
                        <?php
                        if (empty($_REQUEST['id'])) {
                        ?>
                            <button type="submit" class="btn btn-primary" name="proses" value="tambah">Tambah Data</button>
                        <?php
                        } else {
                        ?>
                            <input type="hidden" name="idx" value="<?= $row['id']; ?>" />
                            <button type="submit" class="btn btn-primary" name="proses" value="ubah">Ubah Data</button>
                        <?php  }
                        ?>

                        <a href="index.php?hal=mahasiswa" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Project End -->