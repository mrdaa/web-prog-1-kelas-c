<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();


if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else {
    echo "Sambungan basis data berhasil";
}

$query = "delete from stok_barang where kode=" . $_GET["kode"];

if($koneksi->query($query) === true) {
    echo "<br> Data kode " . $_GET["kode"] . " berhasil hapus." .
            ' <a href="main.php">Lihat Data</a>';
} else {
    echo "<br>Data GAGAL disimpan";
}
$koneksi->close();
?>