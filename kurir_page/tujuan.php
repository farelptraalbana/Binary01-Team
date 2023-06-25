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
   <title>Halaman Tujuan Pengiriman Kurir</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/tujuan.css">

</head>
<body>
   
<div class="container">
   <div class="kotak">
      <div class="header">
         <img src="../kurir_page/asset/logo.png" alt="logo">
         <h2>Selamat Datang, Kurir</h2>
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
      
   </div>

</div>

</body>
</html>