<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lacak Kiriman</title>
  <!-- bootstrap 5 css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
  <!-- custom css -->
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    .form-select {
      display: flex;
      text-align: center;
      width: 500px;
    }

    .container {
      font-size: 30px;
    }

    label {
      font-size: 20px;
    }

    .bg {
      padding: 0;
      margin: 0;
      background-image: url("../lacak_kiriman/asset/bg.jpg");
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .form-control {
      display: flex;
      text-align: center;
      width: 500px;
    }
    input[type="text"]{
      border-radius: 10px;
    }
  </style>
</head>

<body class="bg">

  <!-- Main Content -->
  <div class="p-2" id="main-content">

    <!-- Content Card -->
    <h3 class="text-center mt-4">Pelacakan Kiriman</h3>
    <form action="" method="POST">
      <form action="" method="POST">
        <div class="d-flex justify-content-center flex-column align-items-center">
          <label for="no_resi" class="text-center mb-3 mt-3">Masukkan Nomor Resi Anda</label>
          <input type="text" list="resi_options" class="form-control mb-3" name="no_resi" id="no_resi" placeholder="-- No Resi Anda --" autocomplete="off">
          <datalist id="resi_options">
            <?php
            $server = "localhost";
            $user = "root";
            $password = "";
            $database = "pengiriman_db";
            $conn = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($conn));
            $data = mysqli_query($conn, "SELECT * FROM data_barang");
            if ($data) {
              if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_array($data)) {
                  // Tambahkan pilihan dari database ke dalam datalist
                }
              }
            }
            ?>
          </datalist>
          <button type="submit" class="btn btn-warning">Submit</button>
        </div>
      </form>

    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['no_resi'])) {
        $selectedOption = $_POST['no_resi'];

        $resiselected = $_POST['no_resi'];
        $dataselected = mysqli_query($conn, "SELECT * FROM data_barang JOIN status_perjalanan ON data_barang.id_pelanggan = status_perjalanan.id_pelanggan WHERE no_resi = '$resiselected'");
        if ($dataselected && mysqli_num_rows($dataselected) > 0) {
          $row = mysqli_fetch_array($dataselected);
    ?>
          <div class="container mt-5">
            <div class="row">
              <div class="col">
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-person-circle"></i>
                  </div>
                  <div class="col ml-3">
                    Penerima : <?php echo $row['nama_penerima'] ?>
                  </div>
                </div>
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-person-circle"></i>
                  </div>
                  <div class="col ml-3">
                    Pengirim : <?php echo $row['nama_pengirim'] ?>
                  </div>
                </div>
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-truck"></i>
                  </div>
                  <div class="col ml-3">
                    Asal Kiriman : <?php echo $row['asal_kiriman'] ?>
                  </div>
                </div>
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-bicycle"></i>
                  </div>
                  <div class="col ml-3">
                    Tujuan Barang : <?php echo $row['tujuan_barang'] ?>
                  </div>
                </div>
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-phone"></i>
                  </div>
                  <div class="col ml-3">
                    Nomor Kurir : <?php echo $row['no_kurir'] ?>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-calendar-event"></i>
                  </div>
                  <div class="col ml-3">
                    Waktu Pengiriman : <?php echo $row['waktu_pengiriman'] ?>
                  </div>
                </div>
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-wallet"></i>
                  </div>
                  <div class="col ml-3">
                    Biaya Pengiriman : <?php echo $row['biaya'] ?>
                  </div>
                </div>
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-person"></i>
                  </div>
                  <div class="col ml-3">
                    Nama Kurir : <?php echo $row['nama_kurir'] ?>
                  </div>
                </div>
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-pin-map-fill"></i>
                  </div>
                  <div class="col ml-3">
                    Status Perjalanan : <?php echo $row['status_perjalanan'] ?>
                  </div>
                </div>
                <div class="row ml-4 mt-3">
                  <div class="col-1">
                    <i class="bi bi-car-front-fill"></i>
                  </div>
                  <div class="col ml-3">
                    Plat Kendaraan : <?php echo $row['plat_nomor'] ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <?php
        }
      }
    }
    ?>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>