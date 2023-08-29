<?php 
include "connection.php";

$paket = $_POST['nama_paket'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$sql = "INSERT INTO paket (nama_paket, deskripsi, harga) VALUES ('$paket', '$deskripsi', '$harga')";

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
