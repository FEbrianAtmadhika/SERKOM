<?php
include "connection.php";
$dataold = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM profile_company where id='$_POST[id]'"));
$gambarold = $dataold["gambar"];
$nama = $_POST["nama"];
$about = $_POST["about"];
$no_telp = $_POST["no_telp"];
$email = $_POST['email'];
if(($_FILES['gambar']['name'] != null)){
    $targetdir = "../../../asset/profile_company/";
    unlink($targetdir.$gambarold);
    $basename = rand().'_' .basename( $_FILES['gambar']['name']);
    $uploadfile = $targetdir .$basename;
    if(move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile))
    {
    $save=mysqli_query($mysqli, "UPDATE profile_company set nama_company='$nama', about_us='$about',gambar='$basename', no_telp='$no_telp', email='$email' where id='$_POST[id]'");
    echo "<script>
        alert ('Data Berhasil di Edit');
        document.location.href='show_company_profile.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert ('Data Gambar gagal di Tambahkan');
        document.location.href='edit_profile.php?id=$_POST[id]';
        </script>";
    }
}
$save=mysqli_query($mysqli, "UPDATE profile_company set nama_company='$nama', about_us='$about', no_telp='$no_telp', email='$email' where id='$_POST[id]'");
echo "<script>
        alert ('Data Berhasil di Edit');
        document.location.href='show_company_profile.php';
        </script>";

?>