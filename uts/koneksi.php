<?php
class Koneksi {
    private $server = "localhost";
    private $username = "root"; // root
    private $password = ""; // ""
    private $db = "db_mahasiswa";
    function getKoneksi() {
        return new mysqli($this->server, $this->username, 
        $this->password, $this->db);
    }
}
?>