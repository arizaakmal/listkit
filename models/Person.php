<?php
class Person
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
        $sql = "SELECT person.*, agama.nama AS nama_agama FROM person INNER JOIN agama ON person.agama_id = agama.id";
        //$rs = $this->koneksi->query($sql);
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function tambah($data)
    {
        $sql = "INSERT INTO person (nama,email,hp,asal_kampus,agama_id,gender,alamat,foto,tempat_lahir,tgl_lahir,sosmed,quotes)
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM person WHERE id=?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

    public function view($id)
    {
        $sql = "SELECT person.*, agama.nama AS nama_agama FROM person INNER JOIN agama ON person.agama_id = agama.id WHERE person.id=?";
        //PDO prepare statemSELECT * FROM personent
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function ubah($id)
    {
        $sql = "UPDATE person SET nama=?,email=?,hp=?,asal_kampus=?,agama_id=?,gender=?,alamat=?,foto=?, tempat_lahir=?, tgl_lahir=?, sosmed=?, quotes=?
                WHERE id = ?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

    public function search($keyword)
    {
        $sql = "SELECT person.*, agama.nama AS nama_agama FROM person INNER JOIN agama ON person.agama_id = agama.id WHERE person.nama LIKE '%$keyword%' OR agama.nama LIKE '%$keyword%' OR person.asal_kampus LIKE '%$keyword%' OR person.gender LIKE '%$keyword%'";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
