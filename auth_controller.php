<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Member.php';
//1. tangkap request form (dari name2 element form)
$username = $_POST['username'];
$password = $_POST['password'];
//2. simpan ke sebuah array
$data = [
    $username, // ? 1
    $password, // ? 2
];
//3. eksekusi tombol
$obj_member = new Member();
$rs = $obj_member->auth($data);
if (!empty($rs)) { //----------sukses login-----------
    //setelah sukses login diarahkan ke hal produk
    $_SESSION['MEMBER'] = $rs; //data user dikenal oleh session
    if (isset($_POST['remember'])) {
        setcookie('remember', $rs['id'], time() + 604800); // Cookie berlaku selama 7 hari (604800 detik)
    }
    header('location:index.php?hal=mahasiswa');
} else {  //----------gagal login-----------
    $_SESSION['Error'] = 'Username atau Password salah!';
    header('location:login.php');
}
