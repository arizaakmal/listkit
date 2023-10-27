<?php
class Member
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh; //memanggil variabel di file lain
        $this->koneksi = $dbh;
    }
    //member3 fungsionalitas
    public function index()
    {
        $sql = "SELECT * FROM member ORDER BY role";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO member (fullname,email,username,password,role,foto)
                VALUES (?,?,?,SHA1(MD5(SHA1(?))),?,?)";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getMember($id)
    {
        $sql = "SELECT * FROM member WHERE id = ?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function ubah($data)
    {
        $sql = "UPDATE member SET fullname=?,email=?,username=?,password=SHA1(MD5(SHA1(?))),
                role=?,foto=? WHERE id = ?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM member WHERE id = ?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

    public function auth($data)
    {
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(SHA1(?)))";

        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }

    public function search($keyword)
    {
        $sql = "SELECT * FROM member WHERE fullname LIKE '%$keyword%' OR email LIKE '%$keyword%' OR username LIKE '%$keyword%' OR role LIKE '%$keyword%' ORDER BY role";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
