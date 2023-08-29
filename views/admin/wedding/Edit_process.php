<?php
include "connection.php";
$dataold = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM nikah where id='$_POST[id]'"));
$gambarold = $dataold["Gambar"];
$pria = $_POST["pria"];
$wanita = $_POST["wanita"];
$paket = $_POST["paket"];
if(($_FILES['gambar']['name'] != null)){
    $targetdir = "../../../asset/img/";
    unlink($targetdir.$gambarold);
    $basename = rand().'_' .basename( $_FILES['gambar']['name']);
    $uploadfile = $targetdir .$basename;
    if(move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile))
    {
    $save=mysqli_query($mysqli, "UPDATE nikah set mempelai_pria='$pria', mempelai_wanita='$wanita',gambar='$basename', id_paket='$paket' where id='$_POST[id]'");
    echo "<script>
        alert ('Data Berhasil di Edit');
        document.location.href='show_all.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert ('Data Gambar gagal di Tambahkan');
        document.location.href='Edit.php?id=$_POST[id]';
        </script>";
    }
}
$save=mysqli_query($mysqli, "UPDATE nikah set mempelai_pria='$pria', mempelai_wanita='$wanita', id_paket='$paket' where id='$_POST[id]'");
echo "<script>
        alert ('Data Berhasil di Edit');
        document.location.href='show_all.php';
        </script>";

?>