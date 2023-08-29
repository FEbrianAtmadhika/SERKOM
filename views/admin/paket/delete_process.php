<?php 
include "connection.php";
$id = $_GET["id"];
$sql2 = "DELETE FROM paket WHERE id='$id'";
$action2 = mysqli_query($mysqli, $sql2);
if($action2){
    echo "<script>
    alert ('Data Berhasil di hapus');
    document.location.href='show_all.php';
    </script>"; 
}else{
    echo "<script>
    alert ('Data gagal di Edit');
    document.location.href='show_all.php';
    </script>"; 
}
?>