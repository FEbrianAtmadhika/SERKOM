<?php 
include "connection.php";
$id = $_GET["id"];
$sql1 = "SELECT gambar FROM gallery where id='$id'";
$gambar = mysqli_fetch_array(mysqli_query($mysqli, $sql1));
$sql2 = "DELETE FROM gallery WHERE id='$id'";
$action2 = mysqli_query($mysqli, $sql2);
if($action2){
    unlink('../../../asset/gallery/'.$gambar["gambar"]);
    echo "<script>
        alert ('Data Berhasil di Hapuskan');
        document.location.href='show_all.php';
        </script>";
}else{
    echo "<script>
    alert ('Data gagal di Hapuskan');
    document.location.href='show_all.php';
    </script>";
}
