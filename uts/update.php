<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else {
    echo "Sambungan basis data berhasil";
}

$query = "update data_mahasiswa set nama = '". $_POST["nama"] . 
        "', jurusan = '" . $_POST["jurusan"].
        "' where nim='"  . $_POST["nim"] . "'";


if($koneksi->query($query) === true) {
    echo "<br> Data " . $_POST["nama"] . " berhasil disimpan." .
            ' <a href="index.php">Lihat Data</a>';
} else {
    echo "<br>Data GAGAL disimpan";
}
$koneksi->close();
?>