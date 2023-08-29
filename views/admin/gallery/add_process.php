<?php 
include "connection.php";

$targetdir = "../../../asset/gallery/";
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
$sql = "INSERT INTO gallery (gambar) VALUES ('$basename')";
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
