<?php
class koneksi{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "phb_kelas_c";

    function getkoneksi(){
        return new mysqli($this->server, $this->username, $this->password, $this->db);
    }
}
?>