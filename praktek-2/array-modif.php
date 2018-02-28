<?php
$data = array(
    "nama" => "dwi aji apriyadi",
    "usia" => 30,
    "Single" => true,
    0.1 => 5
);
echo "nama : ".$data["nama"]. "<br>";
echo "usia : ".$data["usia"]. "<br>";
echo "Status : ".$data["Single"]. "<br>";
echo "data lain : ".$data[0.1]. "<br>";
?>