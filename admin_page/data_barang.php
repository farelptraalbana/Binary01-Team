<?php

@include '../login/config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
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
            </ul>
            <div class="card-body mt-5 text-center">
              <a href="../login/login_form.php" class="btn btn-light mt-5 text-center">
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
          <div class="card mt-1">
            <div class="card-body">
              <h1>Hai !</h1>
              <h3>Selamat Datang Administrator</h3>
            </div>
          </div>

          <!-- Content Card -->
          <h3 class="text-center mt-2">Data Barang</h3>
          <div class="card mt-2">
            <div class="card-header bg-warning text-white">
              Data Barang
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped table-hover">
               <tr>
                  <th>No</th>
                  <th>No Resi Barang</th>
                  <th>Nama Pengirim</th>
                  <th>Nama Penerima</th>
                  <th>Asal Kiriman</th>
                  <th>Tujuan Barang</th>
                  <th>Waktu Pengiriman</th>
                  <th>Biaya Pengiriman</th>
                  <th>Aksi</th>
               </tr>

               <?php
                  $no = 1;
                  $tampil = mysqli_query($conn, "SELECT * FROM data_barang ORDER BY id_pelanggan ASC");
                  while($data = mysqli_fetch_array($tampil)):
               ?>

               <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['no_resi']?></td>
                  <td><?= $data['nama_pengirim']?></td>
                  <td><?= $data['nama_penerima']?></td>
                  <td><?= $data['asal_kiriman']?></td>
                  <td><?= $data['tujuan_barang']?></td>
                  <td><?= $data['waktu_pengiriman']?></td>
                  <td><?= $data['biaya']?></td>
                  <td>
                     <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Ubah</a>
                     <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
                  </td>
               </tr>

               <!-- Awal Modal Ubah Data-->
               <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Barang</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form method="POST" action="action_CRUD.php">
                           <input type="hidden" name="id_pelanggan" 
                           value="<?= $data['id_pelanggan'] ?>">
                           <div class="modal-body">
                           
                           <div class="mb-3">
                              <label class="form-label">No Resi Barang</label>
                              <input type="text" class="form-control" name="tresi" 
                              value="<?=$data['no_resi']?>" placeholder="Masukkan No Resi Barang">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Nama Pengirim</label>
                              <input type="text" class="form-control" name="tpengirim" 
                              value="<?=$data['nama_pengirim']?>" placeholder="Masukkan Nama Pengirim">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Nama Penerima</label>
                              <input type="text" class="form-control" name="tpenerima" 
                              value="<?=$data['nama_penerima']?>" placeholder="Masukkan Nama Penerima">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Asal Kiriman</label>
                              <input type="text" class="form-control" name="tasal" 
                              value="<?=$data['asal_kiriman']?>" placeholder="Masukkan Kota Asal Kiriman">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Tujuan Kiriman</label>
                              <input type="text" class="form-control" name="ttujuan" 
                              value="<?=$data['tujuan_barang']?>" placeholder="Masukkan Kota Tujuan Kiriman">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Waktu Kiriman</label>
                              <input type="text" class="form-control" name="twaktu" 
                              value="<?=$data['waktu_pengiriman']?>" placeholder="Masukkan Waktu Kiriman">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Biaya Kiriman</label>
                              <input type="text" class="form-control" name="tbiaya" 
                              value="<?=$data['biaya']?>" placeholder="Masukkan Biaya Kiriman">
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="btn btn-warning" name="bubah">Ubah</button>
                           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- Akhir Modal Ubah Data-->

               <!-- Awal Modal Hapus Data-->
               <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data Barang</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form method="POST" action="action_CRUD.php">
                           <input type="hidden" name="id_pelanggan" 
                           value="<?= $data['id_pelanggan'] ?>">
                           <div class="modal-body">

                              <h5 class="text-center">Apakah anda Yakin akan menghapus data ini? <br>
                                 <span class="text-danger">No Resi : <?= $data['no_resi']?></span>
                              </h5>
                           
                           </div>
                        <div class="modal-footer">
                           <button type="submit" class="btn btn-warning w-50 text-white" name="bhapus">Hapus aja bang Admin</button>
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
               <button type="button" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#modalTambah">
                  Tambah Data
               </button>

               <!-- Akhir Modal Simpan Data -->
               <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Barang</h1>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form method="POST" action="action_CRUD.php">
                           <div class="modal-body">
                           
                           <div class="mb-3">
                              <label class="form-label">No Resi Barang</label>
                              <input type="text" class="form-control" name="tresi" placeholder="Masukkan No Resi Barang">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Nama Pengirim</label>
                              <input type="text" class="form-control" name="tpengirim" placeholder="Masukkan Nama Pengirim">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Nama Penerima</label>
                              <input type="text" class="form-control" name="tpenerima" placeholder="Masukkan Nama Penerima">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Asal Kiriman</label>
                              <input type="text" class="form-control" name="tasal" placeholder="Masukkan Kota Asal Kiriman">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Tujuan Kiriman</label>
                              <input type="text" class="form-control" name="ttujuan" placeholder="Masukkan Kota Tujuan Kiriman">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Waktu Kiriman</label>
                              <input type="text" class="form-control" name="twaktu" placeholder="Masukkan Waktu Kiriman">
                           </div>
                           <div class="mb-3">
                              <label class="form-label">Biaya Kiriman</label>
                              <input type="text" class="form-control" name="tbiaya" placeholder="Masukkan Biaya Kiriman">
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="btn btn-warning" name="bsimpan">Tambah</button>
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