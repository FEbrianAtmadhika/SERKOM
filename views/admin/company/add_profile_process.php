<?php 
include 'connection.php';
$nama = $_POST['nama'];
$about = $_POST['about'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$targetdir = "../../../asset/profile_company/";
$basename = rand().'_' .basename( $_FILES['gambar']['name']);
$uploadfile = $targetdir .$basename;
if(move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile))
{
}
else
{
    echo "<script>
    alert ('Data Gambar gagal di Tambahkan');
    document.location.href='add_profile_company.php';
	</script>";
}
$sql = "INSERT INTO profile_company (nama_company, about_us, gambar, no_telp, email) VALUES ('$nama','$about', '$basename', '$no_telp', '$email')";

$save = mysqli_query($mysqli, $sql);
if($save){
    echo"
        <script>
        alert ('Data berhasil di Tambahkan');
        document.location.href='show_company_profile.php';
        </script>";
}else{
    echo "<script>
    alert ('Data gagal di Tambahkan');
	</script>";
}
?>