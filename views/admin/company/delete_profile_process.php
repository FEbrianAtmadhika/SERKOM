<?php 
include "connection.php";
$id = $_GET["id"];
$sql1 = "SELECT gambar FROM profile_company where id='$id'";
$gambar = mysqli_fetch_array(mysqli_query($mysqli, $sql1));
$sql2 = "DELETE FROM profile_company WHERE id='$id'";
$action2 = mysqli_query($mysqli, $sql2);
if($action2){
    unlink('../../../asset/profile_company/'.$gambar["gambar"]);
    echo "<script>
        alert ('Data Berhasil di Hapuskan');
        document.location.href='show_company_profile.php';
        </script>";
}else{
    echo "<script>
    alert ('Data gagal di Hapuskan');
    document.location.href='show_company_profile.php';
    </script>";
}
