<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else {
    echo "Sambungan basis data berhasil";
}

$query = "delete from data_mahasiswa where nim=" . $_GET["nim"];

if($koneksi->query($query) === true) {
    echo "<br> Data nim " . $_GET["nim"] . " berhasil hapus." .
            ' <a href="index.php">Lihat Data</a>';
} else {
    echo "<br>Data GAGAL disimpan";
}
$koneksi->close();
?>