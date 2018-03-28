<?php
if (empty($_POST['nim']) || empty($_POST['nama']) || empty($_POST['jurusan']))
    {
    echo "<h3>Data kosong atau belum lengkap, silahkan lengkapi data anda!</h3><a href='input.php'>kembali</a>";
    }
    else
    {
        include "koneksi.php";
        $koneksiObj = new Koneksi();
        $koneksi = $koneksiObj->getKoneksi();
        if($koneksi->connect_error) {
            echo "Gagal koneksi : " . $koneksi->connect_error;
        } else {
            echo "Sambungan basis data berhasil";
        }
        
        $query = "insert into data_mahasiswa(nim, nama, jurusan) " .
                "values('" . $_POST["nim"] . "','" . 
                $_POST["nama"] . "','" . $_POST["jurusan"] . "')";
        
        if($koneksi->query($query) === true) {
            echo "<br> Data " . $_POST["nama"] . " berhasil disimpan." .
                    ' <a href="index.php">Lihat Data</a>';
        } else {
            echo "<br>Data GAGAL disimpan";
        }
        $koneksi->close();
    }

?>