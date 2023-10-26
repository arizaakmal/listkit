<?php
class Agama
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh; // globalkan instance obj $dbh di file koneksi.php
        $this->koneksi = $dbh;
    }
    //member3 fungsionalitas
    public function index()
    {
        //$sql = "SELECT * FROM produk";
        $sql = "SELECT * FROM agama";
        //$rs = $this->koneksi->query($sql);
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
