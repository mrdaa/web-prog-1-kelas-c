<h2>Aplikasi Stok Barang</h2>
<hr>
<a href="input.php">Tambah Data</a>
<table border="1">
    <tr>
        <th>KODE</th>
        <th>NAMA BARANG</th>
        <th>STOK</th>
    </tr>
    <?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();
if($koneksi->connect_error) {
    echo "<tr><td>";
    echo "Gagal koneksi : " . $koneksi->connect_error;
    echo "</td></tr>";
} else {
    echo "<tr><td>";
    echo "Sambungan basis data berhasil";
    echo "</td></tr>";
}
    ?>
</table>