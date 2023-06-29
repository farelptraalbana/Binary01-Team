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
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kurir Page</title>
        <!-- bootstrap 5 css -->
        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
          crossorigin="anonymous"
        />
        <!-- custom css -->
        <!-- <link rel="stylesheet" href="style.css" /> -->
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

          li {
            list-style: none;
            margin: 20px 0 20px 0;
            font-size: 18px;
          }

          ul li a{
            margin-left: -10px;
          }

          .navbar{
            background-color: #E85D04;
          }
    
          a {
            text-decoration: none;
            width: 30px;
            height: 30px;
          }
    
          .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
          }
    
          .active-main-content {
            margin-left: 250px;
          }
    
          .active-sidebar {
            margin-left: 0;
          }
    
          #main-content {
            transition: 0.4s;
          }
          .sidebar{
            background: #FFBA08;
          }
          .sidebar h2{
            font-size: 20px;
          }
          .sidebar img{
            height: 40px;
            width: 40px;
          }
          .nama_admin{
            font-family: ubuntu;
          }
          .card-body .btn{
            width: 100px;
            height: 40px;
          }
          .card-body h1{
            color: #D00000;
          }
          .card .btn1{
            width: 250px;
            color: white;
            font-size: 25px;
          }   
          .card .bi{
            font-size: 44px;
          }  
        </style>
      </head>
    
      <body>

        <div class="header">
          <nav class="navbar">
            <div class="container-fluid">
              <img src="../kurir_page/asset/logo.png" class="img-fluid logo-img" alt="..." width="80px" height="60px">
              </form>
            </div>
          </nav>
        </div>

        <div>
          <div class="sidebar p-4" id="sidebar">
          <div class="d-flex align-items-center">
            <img src="../kurir_page/asset/profile.png" alt="" class="mr-3">
            <div>
             <h4 class="text-white text-center ml-4">Kurir</h4>
             <div class="nama_kurir text-center ml-3"><?php echo $_SESSION['kurir_name'] ?></div>
            </div>
          </div>             
            <h2 class="mt-5 text-dark text-center">Menu</h2>
            <ul>
              <li>
                <a class=" dashboard text-white" href="../kurir_page/kurir_page.php">
                  <i class="bi bi-house"></i>
                  Dashboard
                </a>
              </li>
              <li>
                <a class="text-white" href="../kurir_page/tujuan.php">
                  <i class="bi bi-map"></i>
                  Tujuan Pengiriman
                </a>
              </li>
              <li>
                <a class="text-white" href="../kurir_page/status_perjalanan.php">
                  <i class="bi bi-bicycle"></i>
                  Status Perjalanan
                </a>
              </li>
            </ul>
            <div class="card-body mt-5 text-center">
              <a href="../login/login_form.php" class="btn btn-light mt-5 text-center">
                <i class="bi bi-power text-danger"></i> Logout
              </a>
            </div>            
          </div>
        </div>

        <!-- Main Content -->
        <div class="p-2" id="main-content">
          <button class="btn btn-warning" title="button" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
          <div class="card mt-1 mb-3">
            <div class="card-body">
              <h1>Hai !</h1>
              <h3>Selamat Datang Kurir</h3>
            </div>
          </div>

          <!-- Content Card -->
          <h3 class="text-center mt-2">Status Perjalanan</h3>
          
        </div>
    
        <script>
    
          // event will be executed when the toggle-button is clicked
          document.getElementById("button-toggle").addEventListener("click", () => {
    
            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");
    
            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
          });
    
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      </body>
    </html>