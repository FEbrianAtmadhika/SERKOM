<?php
include "connection.php";
$paket = $_POST["nama_paket"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST['harga'];

$save=mysqli_query($mysqli, "UPDATE paket set nama_paket='$paket', deskripsi='$deskripsi', harga='$harga' where id='$_POST[id]'");

if($save){
    echo "<script>
    alert ('Data Berhasil di Edit');
    document.location.href='show_all.php';
    </script>"; 
}else{
    echo "<script>
    alert ('Data gagal di Edit');
    document.location.href='Edit.php?id=$_POST[id]';
    </script>";
}


?>