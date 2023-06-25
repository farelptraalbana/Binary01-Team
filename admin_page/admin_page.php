<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:../login/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Dashboard Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_page_style.css">

</head>
<body>
   
<div class="container">
   <div class="kotak">
      <div class="header">
         <img src="../admin_page/asset/logo.png" alt="logo">
      </div>
      <div class="menu_bar">
         <img src="../admin_page/asset/profile.png" alt="profile">
         <h1>Administrator</h1>
         <div class="nama_admin"><?php echo $_SESSION['admin_name'] ?></div>
         <h2>Menu</h2>
         <div class="menubar1">
            <h3><a href="../admin_page/admin_page.php">Dashboard</a></h3>
            <img src="../admin_page/asset/dashboard.png" alt="">
         </div>
         <div class="menubar2">
            <h3><a href="../admin_page/data_barang.php">Data Barang</a></h3>
            <img src="../admin_page/asset/barang.png" alt="">
         </div>
         <div class="menubar3">
            <h3><a href="../admin_page/status_perjalanan.php">Status Perjalanan</a></h3>
            <img src="../admin_page/asset/status_perjalanan.png" alt="">
         </div>
         <div class="menubar4">
            <h3><a href="../admin_page/data_kurir.php">Data Kurir</a></h3>
            <img src="../admin_page/asset/kurir.png" alt="">
         </div>
      </div>
   </div>

   <div class="content">
      <div class="kotak1"></div>
      <h3>Hi !</h3>
      <div class="welcome">Selamat Datang, Administrator</div>
      <div class="kotak2">
         <img src="../admin_page/asset/barang.png" alt="">
         <a href="../admin_page/data_barang.php">Data Barang</a>
      </div>
      <div class="kotak3">
         <img src="../admin_page/asset/status_perjalanan.png" alt="">
         <a href="../admin_page/status_perjalanan.php">Status Perjalanan</a>
      </div>
      <div class="kotak4">
         <img src="../admin_page/asset/kurir.png" alt="">
         <a href="../admin_page/data_kurir.php">Data Kurir</a>
      </div>
      <div class="kotak_logout"></div>
      <div class="logout">
         <img src="../admin_page/asset/logout.png" alt="">
         <a href="../login/logout.php" class="btn">Logout</a>
      </div>
   </div>

</div>

</body>
</html>