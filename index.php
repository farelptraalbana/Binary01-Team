<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
   <!-- Include Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../Binary01-Team/lacak_kiriman/css/style.css">
  <style>
    button[type="submit"] {
      font-size: 20px;
    }
  </style>
</head>

<body>
  <div class="header">
    <nav class="navbar">
      <div class="container-fluid">
        <img src="../Binary01-Team/lacak_kiriman/asset/logo.png" class="img-fluid logo-img" alt="..."width="80px" height="60px">
        <form class="border rounded-sm border-dark p-2" role="search">
          <img src="../Binary01-Team/lacak_kiriman/asset/icon_profile.png" class="img-fluid custom-img ml-3" alt="..." width="30px" height="30px">
          <a class="btn" href="../Binary01-Team/login/login_form.php" role="button" style="margin-left: -10px;">Login</a>
        </form>
      </div>
    </nav>
  </div>

  <div class="content">
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../Binary01-Team/lacak_kiriman/asset/slider1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../Binary01-Team/lacak_kiriman/asset/slider2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../Binary01-Team/lacak_kiriman/asset/slider3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="footer" style="background-color: #D00000; height: 213px; position: relative;">
    <div class="container-fluid">
      <div class="input-group mb-3 mt-3" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <form action="" method="post" class="mx-auto w-50">
          <button type="submit" name="submit" class="btn d-block mx-auto mb-5" style="background-color: #FFBA08; border-radius: 40px; width: 300px; height: 60px;">
            <a href="../Binary01-Team/lacak_kiriman/lacak_kiriman.php">LACAK KIRIMAN ANDA <i class="fas fa-arrow-right"></i></a>
          </button>
        </form>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- Include Font Awesome JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>