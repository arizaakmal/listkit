<?php
if ($_SESSION['MEMBER']['role'] != 'admin') {
    header('location:index.php');
}
$arr_judul = ['No', 'Nama Lengkap', 'Username', 'Email', 'Role', 'Foto', 'Aksi'];
//ciptakan object dari class Jenis
$obj_member = new Member();
//panggil fungsionalitas terkait
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $data = $obj_member->search($keyword);
} else {
    $data = $obj_member->index();
}
//print_r($rs); die();

?>


<!-- Project Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Member</h5>
            <h1 class="display-5">List Data Seluruh Member</h1>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay=".3s">
            <div class="col d-flex">
                <div class="text-end border-dark search-btn w-25 ms-auto">
                    <div class="search-form">
                        <form method="GET">
                            <div class="form-group">
                                <div class="d-flex">
                                    <input type="search" class="form-control border-1 rounded-pill me-3" name="keyword" placeholder="Cari..." />
                                    <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search text-dark"></i></button>
                                    <input type="hidden" name="hal" value="member" />
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
                    foreach ($data as $member) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $member['fullname']; ?></td>
                            <td><?= $member['username']; ?></td>
                            <td><?= $member['email']; ?></td>
                            <td><?= ucfirst($member['role']); ?></td>
                            <?php
                            if ($member['foto'] == '') {
                                $member['foto'] = 'no-photo.gif';
                            }
                            ?>
                            <td><img class="rounded-circle" src="img/<?= $member['foto']; ?>" width="30px" /></td>
                            <td>
                                <?php
                                if ($member['role'] != 'admin') {
                                ?>
                                    <form method="POST" action="member_controller.php">
                                        <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda yakin dihapus?')"><i class="fas fa-trash"></i> Hapus</button>
                                        <input type="hidden" name="id" value="<?= $member['id'] ?>" />
                                    </form>
                                <?php    }
                                ?>

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