<form method="get" action="coba-if.php">
    KELAS : <input type="text" name="kelas"><br>
    <input type="submit" value="Proses">
</form>

<?php
if(array_key_exists("kelas",$_GET)) {
    // switch($_GET["kelas"]){
    //     case"4a":
    //         echo 'Kamu di Kelas 4A kan....';
    //         break;
    //     case"4c":
    //         echo 'Kamu adalah Mahasiswa terbaik';
    //         break;
    //     default :
    //         echo "Kamu bukan mahasiswa semester 4";
    //         break;
    // }
    if($_GET["kelas"]== "4a") {
        echo "Kamu di kelas 4a ..";
    }elseif($_GET["kelas"]=="4c"){
        echo "kamu di kelas 4c";
    }else{
        echo"kamu bukan mahasiswa semester 4";
    }
}
?>