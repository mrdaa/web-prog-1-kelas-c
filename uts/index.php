<h2>Aplikasi Data Mahasiswa</h2>
<hr>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>NAMA </th>
        <th>JURUSAN</th>
        <th>OPSI</th>
    </tr>
<?php
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "<tr><td>";
    echo "Gagal koneksi : " . $koneksi->connect_error;
    echo "</td></tr>";
}

$query="select * from data_mahasiswa";
$data = $koneksi->query($query);
if($data->num_rows <= 0) {
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></tr>";
} else {
   while($row = $data->fetch_assoc()){
        echo "<tr>";
        echo "<td>". $row["nim"] . "</td>" ;
        echo "<td>". $row["nama"] . "</td> "; 
        echo "<td>". $row["jurusan"] . "</td>";
        echo '<td><a href="edit.php?nim=' . 
            $row["nim"]. '">Edit</a>';
        echo ' <a href="hapus.php?nim=' . 
            $row["nim"]. '">Hapus</a></td>';
        echo "</tr>";
    }

}

?>
</table><br><a href="input.php"><input type="button" value="Tambah Data"> </a>