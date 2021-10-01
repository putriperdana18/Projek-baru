<?php
include '../database.php';
$pendaftaran  = new pendaftaran ();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $nisn = @$_POST['nisn'];
    $nama = $_POST['nama']; 
    $alamat = $_POST['alamat'];
    $ttl = @$_POST['ttl'];
    $orangtua = $_POST['orangtua']; 
    $notlp = $_POST['notlp'];
    $jk = @$_POST['jk'];
    $askol = $_POST['askol']; 
    $id_jurusan = $_POST['id_jurusaan'];

    if ($aksi == "create") {
        $pendaftaran->create($nisn, $nama, $alamat, $ttl, $orangtua, $notlp, $jk, $askol, $id_jurusan);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pendaftaran->update($nisn, $nama, $alamat, $ttl, $orangtua, $notlp, $jk, $askol, $id_jurusan);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pendaftaran->delete($nisn);
        header("location:index.php");
    }

}
