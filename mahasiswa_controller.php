<?php
include_once 'koneksi.php';
include_once 'models/Person.php';

$tombol = $_POST['proses'];
//1. tangkap request form (dari name2 element form)
if (!isset($_POST['id'])) {
    // var_dump($_POST);
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $asal_kampus = $_POST['asal_kampus'];
    $agama = $_POST['agama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $sosmed = $_POST['sosmed'];
    $quotes = $_POST['quotes'];
    // untuk keperluan eksekusi sebuah tombol di form
    //2. simpan ke sebuah array
    $data = [
        $nama, // ? 2
        $email, // ? 3
        $hp, // ? 4
        $asal_kampus, // ? 5
        $agama, // ? 6
        $gender, // ? 7
        $alamat, // ? 8
        $foto,
        $tempat_lahir,
        $tgl_lahir,
        $sosmed,
        $quotes
    ];
}

//3. eksekusi tombol
$obj_mahasiswa = new Person();
switch ($tombol) {
    case 'tambah':
        $obj_mahasiswa->tambah($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];; // tambah array ? ke-8 dari hidden field idx
        $obj_mahasiswa->ubah($data);
        break;
    case 'hapus':
        $obj_mahasiswa->hapus($_POST['id']);
        break; //$_POST['id'] dari hidden field di tombol hapus

    default:
        header('location:index.php?hal=mahasiswa');
        break;
}
//4. setelah selasai arahkan ke hal produk
header('location:index.php?hal=mahasiswa');

//----------proses pencarian data---------------
