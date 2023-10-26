<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=contact_person;host=localhost;port=3306';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Sukses koneksi ke db dengan user $user";
} catch (PDOException $e) {
    echo 'Terjadi kesalahan koneksi dengan sebab ' . $e->getMessage();
}
