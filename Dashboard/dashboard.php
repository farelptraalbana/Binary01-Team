<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:../admin_page/admin_page.php');

      }elseif($row['user_type'] == 'kurir'){

         $_SESSION['kurir_name'] = $row['name'];
         header('location:../kurir_page/kurir_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../Dashboard/css/style.css">
  </head>
  <body>
    <div class="header">
      <nav class="navbar">
        <div class="container-fluid">
          <img src="../Dashboard/asset/logo.png" class="img-fluid logo-img" alt="..." width="80px" height="60px">
          <form class="border rounded-sm border-dark p-2" role="search">
            <img src="../Dashboard/asset/icon_profile.png" class="img-fluid custom-img" alt="..." width="30px" height="30px">
            <a class="btn" href="../login/login_form.php" role="button">Login/Register</a>
          </form>
        </div>
      </nav>
    </div>
    
    <div class="content">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../Dashboard/asset/slider1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../Dashboard/asset/slider2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../Dashboard/asset/slider3.png" class="d-block w-100" alt="...">
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
        <div class="tulisan text-center" style="position: absolute; top: 20%; left: 50%; transform: translate(-50%, -50%);">
          <h1 style="color: #FFBA08; font-size: 25px;">Lacak Kiriman</h1>
        </div>
        <div class="input-group mb-3 mt-3" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
          <form action="" method="post" class="mx-auto w-50" >
            <input type="text" class="form-control text-center" placeholder="Masukkan Nomor Resi Anda" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" style="background-color: #FFBA08; border: none;">
            <button type="submit" name="submit" class="btn mt-4 d-block mx-auto" style="background-color: #FFBA08; border-radius: 40px; width: 100px;"><a href="">Search</a></button>
          </form>
        </div>
      </div>     
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
