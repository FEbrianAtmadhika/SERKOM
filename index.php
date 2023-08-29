<!DOCTYPE html>
<html lang="en">
  <?php
  include "connection.php";
  $sql = "SELECT * FROM profile_company LIMIT 1";
  $sql2 = "SELECT * FROM gallery";
  $result = mysqli_query($mysqli, $sql);
  $result2 = mysqli_query($mysqli, $sql2);

   ?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Let's Wedding</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="asset/fonts/font-awesome.min.css">
  </head>
  <style>
    .navbar-nav .nav-item {
      margin-right: 20px;
      margin-left: 20px;
    }
  </style>
  <body style="background-color: #ffffff;">
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
              <a class="nav-link" href="index.php" style="color: #ff66b2">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Gallery.php" style="color:#27374d">Testimoni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery" style="color:#27374d">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" style="color:#27374d">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#paket" style="color:#27374d">Paket</a>
            </li>
          </ul>
        </div>
        <button class="btn rounded-pill  btn-sm" style="background-color: #ffc0cb; color: #27374d" onclick="window.location.href='login.php'">LOGIN</button>
      </div>
    </nav>

    <div class="container-fluid w-100 p-0">
      <header class="masthead" style="background-image: url(asset/gallery/home.jpg); height: max-content;">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span>Welcome To  Nikah</span></div>
                <div class="intro-heading text-uppercase"><span>Let's Have Beautiful Wedding</span></div><a class="btn btn-xl text-uppercase js-scroll-trigger" role="button" href="#about" style="background-color:#ffc0cb">Tell me more</a></div>
        </div>
    </header>
    </div>
    
<div class="container " style="height: 200px;"></div>
    <div class="container-fluphpid mt-4">
  <div class="d-flex justify-content-start">
    <div class="card mb-3 m-5 border-0" style="max-width: 1300px;">
      <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center justify-content-center" style="background-color: #dde6ed;" >
          <img src="asset/img/carausel 1.jpg" class="img-fluid rounded-start" style="object-fit: cover;" alt="..." />
        </div>
        <div class="col-md-8 rounded-end" style="background-color: #ffc0cb;">
          <div class="card-body">
            <h2 class="card-title text-center">Let’s Make Your Dream Wedding True With Us</h2>
            <p class="card-text text-end">Designing a Wedding that Easily Reflects Your Personality and Beauty. All at the Tip of Your Fingers.</p>
            <div class="text-end">
              <button class="btn rounded-pill  btn-sm" style="background-color: #27374d; border-color: #27374d; color: #dde6ed" onclick="window.location.href='login.php'">LOGIN <i class="fas fa-arrow-right"></i></button>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<div class="container " style="height: 200px;"></div>

<div class="container-fluid mt-4">
  <div class="d-flex justify-content-end">
    <div class="card mb-3 m-5 border-0" style="max-width: 1300px;">
      <div class="row g-0">
        <div class="col-md-8 rounded-start" style="background-color: #ffc0cb;">
          <div class="card-body">
            <h2 class="card-title text-center">Looking For Some Idea ?</h2>
            <p class="card-text text-end">Let's check out the weddings of other participants for some inspiration!</p>
            <div class="text-end">
              <button class="btn rounded-pill  btn-sm" style="background-color: #27374d; border-color: #27374d; color: #dde6ed" onclick="window.location.href='Gallery.php'">To Testimony <i class="fas fa-arrow-right"></i></button>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center" style="background-color: #dde6ed;" >
          <img src="asset/img/carausel 1.jpg" class="img-fluid rounded-end" style="object-fit: cover;" alt="..." />
        </div>
      </div>
    </div>
  </div>
</div>
</div>

    <section id="about">
    <?php $i=0;
                 while($data = mysqli_fetch_array($result)){?>
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About <?php echo $data['nama_company']?></h2>
              <br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="asset/gallery/<?php echo $data['gambar']?>" style="height: 300px  ;" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6">
            <div class="well-middle">
              <div class="single-well">
                <a href="#" style="text-decoration: none;">
                  <h4 class="sec-head text-center" style="margin: 0 0 15px;color: #444;font-weight: 500;"><?php echo $data['nama_company']?></h4>
                </a>
                <p>
                <?php echo $data['about_us']?>
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> Kontak : <?php echo $data['no_telp']?>
                  </li>
                  <li>
                    <i class="bi bi-check"></i> email : <?php echo $data['email']?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }?>
    </section>
    <section id="gallery" style="background-color: #27374d;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="color: #ffc0cb;">Gallery</h2>
                </div>
            </div>
            <div class="row">
              <?php 
              while($data = mysqli_fetch_array($result2)){
              ?>
                <div class="col-sm-6 col-md-4 portfolio-item" >
                        <div class="portfolio-hover" >
                        </div><img class="img-fluid" src="asset/gallery/<?php echo $data['gambar']?>"></a>
                    
                </div>
                <?php }?>
            </div>
            </div>
        </div>
    </section>
    <section id="paket">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">PAKET PERNIKAHAN</h2>
                </div>
            </div>

            <div class="row text-center">
                <?php
                    $query = mysqli_query($mysqli,"SELECT * FROM paket ORDER BY id ASC");
                ?>
                <?php if(mysqli_num_rows($query)>0){ 
                    ?>
                    <?php
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x" style="color:#ffc0cb"></i><i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                        <h4 class="section-heading"><?php echo $data["nama_paket"];?></h4>
                        <p class="text-muted">Rp. <?php echo $data["harga"];?></p>
                        <p class="text-muted"><?php echo $data["deskripsi"];?></p>
                    </div>
                <?php $no++; } ?>
                <?php } ?>
            </div>
        </div>
    </section>
    
<footer>
        <div class="container-fluid d-flex justify-content-center" style="background-color: #27374d;">
          <div class="align-self-center">
            <div class="col-md-4 justify-content-center"><div class="container align-self-center"></div><h1 class="copyright" style="color:#ffc0cb">NIKAH</h1></div>
                    </div>
                </div>
          
    </footer>
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="asset/js/agency.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
