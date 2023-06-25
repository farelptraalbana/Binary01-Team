<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['kurir_name'])){
   header('location:../login/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Dashboard Kurir</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">
   <div class="kotak">
      <div class="header">
         <img src="../kurir_page/asset/logo.png" alt="logo">
      </div>
      <div class="menu_bar">
         <img src="../kurir_page/asset/profile.png" alt="profile">
         <h1>Kurir</h1>
         <div class="nama_admin"><?php echo $_SESSION['kurir_name'] ?></div>
         <h2>Menu</h2>
         <div class="menubar1">
            <h3><a href="../kurir_page/kurir_page.php">Dashboard</a></h3>
            <img src="../kurir_page/asset/dashboard.png" alt="">
         </div>
         <div class="menubar2">
            <h3><a href="../kurir_page/tujuan.php">Tujuan Pengiriman</a></h3>
            <img src="../kurir_page/asset/tujuan.png" alt="">
         </div>
         <div class="menubar3">
            <h3><a href="../kurir_page/status_perjalanan.php">Status Perjalanan</a></h3>
            <img src="../kurir_page/asset/status_perjalanan.png" alt="">
         </div>
      </div>
   </div>

   <div class="content">
      <div class="kotak1"></div>
      <h3>Hi !</h3>
      <div class="welcome">Selamat Datang, Kurir</div>
      <div class="kotak2">
         <img src="../kurir_page/asset/tujuan.png" alt="">
         <a href="../kurir_page/tujuan.php">Tujuan Pengiriman</a>
      </div>
      <div class="kotak3">
         <img src="../kurir_page/asset/status_perjalanan.png" alt="">
         <a href="../kurir_page/status_perjalanan.php">Status Perjalanan</a>
      </div>
      <div class="kotak_logout"></div>
      <div class="logout">
         <img src="../kurir_page/asset/logout.png" alt="">
         <a href="../login/logout.php" class="btn">Logout</a>
      </div>
   </div>

</div>

</body>
</html>