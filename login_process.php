<?php
    include 'connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email)){
    echo "<script>alert('email belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=login_process.php'>";
    }else if (empty($password)){
    echo "<script>alert('Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=login_process.php'>";
    }else{
    session_start();
    $login = mysqli_query($mysqli,"select * from user where email='$email' and password='$password'");
    $data = mysqli_fetch_column($login);
    
    if (mysqli_num_rows($login) > 0){
    $_SESSION['id'] = $id;
    header("location:views/admin/dashboard.php");
    }else{
    echo "<script>alert('email atau Password salah')</script>";
    echo "<meta http-equiv='refresh' content='1 url=login.php'>";
    }
    }
    ?>