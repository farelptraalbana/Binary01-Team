<?php

@include '../login/config.php';

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
  <title>Admin Page || Data Kurir</title>
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
    <h3 class="text-center mt-2">Data Kurir</h3>
    <div class="card mt-2">
      <div class="card-header bg-warning text-white">
        Data Kurir
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>No</th>
            <th>Nama Kurir</th>
            <th>Nomor Kurir</th>
            <th>Plat Kendaraan</th>
            <th>Aksi</th>
          </tr>

          <?php
          $no = 1;
          $tampil = mysqli_query($conn, "SELECT * FROM data_kurir ORDER BY id_kurir ASC");
          while ($data = mysqli_fetch_array($tampil)) :
          ?>

            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data['nama_kurir'] ?></td>
              <td><?= $data['no_kurir'] ?></td>
              <td><?= $data['plat_nomor'] ?></td>
              <td>
                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbahkurir<?= $no ?>">Ubah</a>
                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapuskurir<?= $no ?>">Hapus</a>
              </td>
            </tr>

            <!-- Awal Modal Ubah Data-->
            <div class="modal fade" id="modalUbahkurir<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data Kurir</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <form method="POST" action="action_CRUD.php">
                    <input type="hidden" name="id_kurir" value="<?= $data['id_kurir'] ?>">
                    <div class="modal-body">

                      <div class="mb-3">
                        <label class="form-label">Nama Kurir</label>
                        <input type="text" class="form-control" name="tkurir" value="<?= $data['nama_kurir'] ?>" placeholder="Masukkan Nama Kurir">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="tnomor" value="<?= $data['no_kurir'] ?>" placeholder="Masukkan Nomor Telepon">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Plat Kendaraan</label>
                        <input type="text" class="form-control" name="tplat" value="<?= $data['plat_nomor'] ?>" placeholder="Masukkan Plat Kendaraan">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-warning" name="bubahKurir">Ubah</button>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Akhir Modal Ubah Data-->

            <!-- Awal Modal Hapus Data-->
            <div class="modal fade" id="modalHapuskurir<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data Kurir</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <form method="POST" action="action_CRUD.php">
                    <input type="hidden" name="id_kurir" value="<?= $data['id_kurir'] ?>">
                    <div class="modal-body">

                      <h5 class="text-center">Apakah anda Yakin akan menghapus data ini? <br>
                        <span class="text-danger">Nama Kurir : <?= $data['nama_kurir'] ?></span>
                      </h5>

                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-warning w-50 text-white" name="bhapusKurir">Hapus aja bang Admin</button>
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Akhir ModalHapus Data-->


          <?php endwhile; ?>
        </table>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#modalTambahkurir">
          Tambah Data
        </button>

        <!-- Akhir Modal Simpan Data -->
        <div class="modal fade" id="modalTambahkurir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Kurir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form method="POST" action="action_CRUD.php">
                <div class="modal-body">

                  <div class="mb-3">
                    <label class="form-label">Nama Kurir</label>
                    <input type="text" class="form-control" name="tkurir" placeholder="Masukkan Nama Kurir">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name="tnomor" placeholder="Masukkan Nomor Telepon">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Plat Kendaraan</label>
                    <input type="text" class="form-control" name="tplat" placeholder="Masukkan Plat Kendaraan">
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-warning" name="bsimpanKurir">Tambah</button>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Akhir Modal Simpan Data -->

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>