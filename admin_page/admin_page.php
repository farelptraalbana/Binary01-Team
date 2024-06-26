<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
  header('location:../login/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Page</title>
  <!-- bootstrap 5 css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
  <!-- custom css -->
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    li {
      list-style: none;
      margin: 20px 0 20px 0;
      font-size: 18px;
    }

    ul li a {
      margin-left: -10px;
    }

    .navbar {
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

    .sidebar {
      background: #FFBA08;
    }

    .sidebar h2 {
      font-size: 20px;
    }

    .sidebar img {
      height: 40px;
      width: 40px;
    }

    .nama_admin {
      font-family: ubuntu;
    }

    .card-body .btn {
      width: 100px;
      height: 40px;
    }

    .card-body h1 {
      color: #D00000;
    }

    .card .btn1 {
      width: 250px;
      color: white;
      font-size: 25px;
    }

    .card .bi {
      font-size: 44px;
    }
  </style>
</head>

<body>

  <div class="header">
    <nav class="navbar">
      <div class="container-fluid">
        <img src="../admin_page/asset/logo.png" class="img-fluid logo-img" alt="..." width="80px" height="60px">
        </form>
      </div>
    </nav>
  </div>

  <div>
    <div class="sidebar p-4" id="sidebar">
      <div class="d-flex align-items-center">
        <img src="../admin_page/asset/profile.png" alt="" class="mr-3">
        <div>
          <h4 class="text-white text-center mr-2">Administrator</h4>
          <div class="nama_admin text-center mr-2"><?php echo $_SESSION['admin_name'] ?></div>
        </div>
      </div>
      <h2 class="mt-5 text-dark text-center">Menu</h2>
      <ul>
        <li>
          <a class=" dashboard text-white" href="../admin_page/admin_page.php">
            <i class="bi bi-house"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a class="text-white" href="../admin_page/data_barang.php">
            <i class="bi bi-cart"></i>
            Data Barang
          </a>
        </li>
        <li>
          <a class="text-white" href="../admin_page/status_perjalanan.php">
            <i class="bi bi-bicycle"></i>
            Status Perjalanan
          </a>
        </li>
        <li>
          <a class="text-white" href="../admin_page/data_kurir.php">
            <i class="bi bi-person-fill"></i>
            Data Kurir
          </a>
        </li>
        <li>
          <a class="text-white" href="../admin_page/register_form.php">
            <i class="bi bi-key"></i>
            Daftar Akun
          </a>
        </li>
      </ul>
      <div class="card-body mt-5 text-center">
        <a href="../login/logout.php" class="btn btn-light mt-5 text-center">
          <i class="bi bi-power text-danger"></i> Logout
        </a>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="p-4" id="main-content">
    <button class="btn btn-warning" title="button" id="button-toggle">
      <i class="bi bi-list"></i>
    </button>
    <div class="card mt-5">
      <div class="card-body">
        <h1>Hai !</h1>
        <h3>Selamat Datang Administrator</h3>
      </div>
    </div>

    <!-- Content Card -->

    <div class="content1 row mt-3 justify-content-center">
      <div class="col-sm-5 mb-3 mb-sm-0">
        <div class="card bg-warning">
          <i class="bi bi-cart d-flex justify-content-center mt-2 text-light"></i>
          <div class="card-body d-flex justify-content-center">
            <a href="../admin_page/data_barang.php" class="btn1 text-center">Data Barang</a>
          </div>
        </div>
      </div>
      <div class="col-sm-5 mb-3 mb-sm-0">
        <div class="card bg-warning">
          <i class="bi bi-bicycle d-flex justify-content-center mt-2 text-light"></i>
          <div class="card-body d-flex justify-content-center">
            <a href="../admin_page/status_perjalanan.php" class="btn1 text-center">Status Perjalanan</a>
          </div>
        </div>
      </div>
    </div>
    <div class="content1 row mt-3 justify-content-center">
      <div class="col-sm-5">
        <div class="card bg-warning">
          <i class="bi bi-person-fill d-flex justify-content-center mt-2 text-light"></i>
          <div class="card-body d-flex justify-content-center">
            <a href="../admin_page/data_kurir.php" class="btn1 text-center">Data Kurir</a>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="card bg-warning">
          <i class="bi bi-key d-flex justify-content-center mt-2 text-light"></i>
          <div class="card-body d-flex justify-content-center">
            <a href="../admin_page/register_form.php" class="btn1 text-center">Daftar Akun </a>
          </div>
        </div>
      </div>
    </div>

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
</body>

</html>