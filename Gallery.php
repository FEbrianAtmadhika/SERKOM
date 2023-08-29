<?php
include_once "connection.php";
$sql = "SELECT nikah.*, user.nama, paket.nama_paket FROM nikah join user ON nikah.id_user = user.id JOIN paket ON nikah.id_paket = paket.id";
$result = mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Let's Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  </head>
  <style>
    .navbar-nav .nav-item {
      margin-right: 20px;
      margin-left: 20px;
    }
    .btn-hover-color:hover {
        background-color: #27374d;
        border-color: #27374d;
        color: white;
    }
  </style>
  <body >
  <nav class="navbar navbar-expand-lg navbar-light container" >
      <div class="container">
        <a class="navbar-brand" href="#">
        NIKAH 
          </a>
      </div>
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color: #27374d">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Gallery.php" style="color: #ff66b2">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#gallery" style="color:#27374d">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about" style="color:#27374d">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#paket" style="color:#27374d">Paket</a>
            </li>
          </ul>
        </div>
        <button class="btn rounded-pill  btn-sm" style="background-color: #ffc0cb; color: #27374d" onclick="window.location.href='login.php'">LOGIN</button>
      </div>
    </nav>

<div class="container">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php $i=0;
                 while($data = mysqli_fetch_array($result)){?>
                 <div class="col mb-5 book">
                    <div class="card h-100 "style="background-color: #ffc0cb">
                        <img class="card-img-top" src="asset/img/<?php echo $data["Gambar"]?>"
                            alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Pernikahan <br><?php echo $data["mempelai_pria"]?><br>&<br><?php echo $data["mempelai_wanita"]?></h5>
                                 <span><?php echo $data["nama_paket"]?></span>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="">View More...</a></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <footer>
        <div class="container-fluid d-flex justify-content-center" style="background-color: #27374d;">
          <div class="align-self-center">
            <div class="col-md-4 justify-content-center"><div class="container align-self-center"></div><h1 class="copyright" style="color:#ffc0cb">NIKAH</h1></div>
                    </div>
                </div>
          
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>


