<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "phb_kelas_c";

$koneksi = new mysqli($server,$username,
        $password,$db);
if($koneksi->connect_error){
    echo "gagal koneksi : " . $koneksi->connect_error;
} else{
    echo "sambungan basis data berhasil";
}
$koneksi->close();
?>