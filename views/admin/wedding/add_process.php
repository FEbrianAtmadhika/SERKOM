<?php 
include "connection.php";

$pria = $_POST['pria'];
$wanita = $_POST['wanita'];
$paket = $_POST['paket'];
$targetdir = "../../../asset/img/";
$basename = rand().'_' .basename( $_FILES['gambar']['name']);
$uploadfile = $targetdir .$basename;

if(move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile))
{
}
else
{
    echo "<script>
    alert ('Data Gambar gagal di Tambahkan');
    document.location.href='add_new.php';
	</script>";
}
$sql = "INSERT INTO nikah (id_user, gambar, mempelai_pria, mempelai_wanita,id_paket) VALUES ('1','$basename', '$pria', '$wanita', '$paket')";

$save = mysqli_query($mysqli, $sql);
if($save){
    echo"
        <script>
        alert ('Data berhasil di Tambahkan');
        document.location.href='show_all.php';
        </script>";
}else{
    echo "<script>
    alert ('Data gagal di Tambahkan');
    document.location.href='add_new.php';
	</script>";
}

?>
