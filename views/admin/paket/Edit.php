<!DOCTYPE html>
<html lang="en">
    <?php 
    include "connection.php";
    $sql = "SELECT * from paket Where id='$_GET[id]'";
    $result = mysqli_query($mysqli, $sql);
    $data = mysqli_fetch_array($result);
    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    span{ color:#27374d;}
</style>
<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #ffc0cb;">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3" style="color:#27374d ;"> Admin </div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="../dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Wedding</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../wedding/show_all.php">Show All</a>
                        <a class="collapse-item" href="../wedding/add_new.php">Add New</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>About</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../company/show_company_profile.php">Show</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Gallery</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../gallery/show_all.php">Show</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefor"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Paket</span>
                </a>
                <div id="collapsefor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="show_all.php">Show</a>
                    </div>
                </div>
            </li>
        </ul>
       

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                
                <form action="Edit_process.php" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="d-flex justify-content-between py-3">
        <div class="h4">Edit Paket</div>
    </div>
    <div class="card p-sm-5">
        <form class="row g-3">
        <div class="mb-3">
                <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id']?>">
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Paket</label>
                <input type="text" class="form-control" name="nama_paket" value="<?php echo $data["nama_paket"]?>">
                
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" name="deskripsi" ><?php echo $data['deskripsi']?></textarea>
                
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">harga</label>
                <input type="text" class="form-control" name="harga" placeholder="RP.-----" value="<?php echo $data['harga']?>">
                
            </div>
            <button type="submit" class="btn btn-outline-primary w-25 ">Edit</button>
        </form>

    </div>
</div>
</form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="../../../js/sb-admin-2.min.js"></script>

</body>

</html>