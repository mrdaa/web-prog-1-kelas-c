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
if ( $koneksi->connect_error) {
 die ( "Koneksi ke Basis Data gagal : " . 
        $koneksi->connect_error);}
    
$query = "select * from stok_barang";
$result = $koneksi->query ($query);
if ($result->num_rows > 0) {
while($data = $result->fetch_assoc()){
echo "<tr>" ;
echo "<td>" . $data [ "kode" ] . "</td>" ;
echo "<td>" . $data [ "nama_barang" ] . "</td>" ;
echo "<td>" . $data [ "stok" ] . "</td>" ;
echo "</tr>" ;
}
}else{
echo "<tr>" ;
echo '<td colspan="3">Data NIHIL</td>' ;
echo "</tr>" ;
}
$koneksi->close();
?>
</table>