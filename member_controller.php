<?php
include_once 'koneksi.php';
include_once 'models/Member.php';

$tombol = $_POST['proses'];
//1. tangkap request form (dari name2 element form)


//3. eksekusi tombol
$obj_member = new Member();
switch ($tombol) {
    case 'ubah':
        $data[] = $_POST['idx'];; // tambah array ? ke-8 dari hidden field idx
        $obj_member->ubah($data);
        break;
    case 'hapus':
        $obj_member->hapus($_POST['id']);
        break; //$_POST['id'] dari hidden field di tombol hapus
    default:
        header('location:index.php?hal=member');
        break;
}
//4. setelah selasai arahkan ke hal produk
header('location:index.php?hal=member');

//----------proses pencarian data---------------
