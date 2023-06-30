<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Lacak Kiriman</title>
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

         .form-select{
          display: flex;
          text-align: center;
          width: 500px;
         }
         .container{
          font-size: 30px;
         }
         label{
          font-size: 20px;
         }
         .bg{
          padding: 0; margin: 0;
          background-image: url("../Dashboard/asset/bg.jpg");
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
         }
        </style>
      </head>
    
      <body class="bg">

        <!-- Main Content -->
        <div class="p-2" id="main-content">

          <!-- Content Card -->
          <h3 class="text-center mt-2">Pelacakan Kiriman</h3>
          <form action="" method="GET">
            <div class="d-flex justify-content-center">
            <label for="no_resi" class="text-center mt-1 mr-3 mt-3 bi bi-send-scheck">Nomor Resi Barang : </label>
            

            </div>

            <div class="container text-center mt-4">
              <div class="row mt-2">
                <div class="col">
                  <i class="bi bi-person-circle"></i>
                    Penerima
                </div>
                <div class="col">
                  <i class="bi bi-person-circle"></i>
                    Pengirim
                </div>
                <div class="col">
                  <i class="bi bi-truck"></i>
                    Asal Kiriman
                </div>
                <div class="col">
                  <i class="bi bi-bicycle"></i>
                    Tujuan Barang
                </div>
              </div>
            </div>
            <div class="container mt-4 ml-4">
              <div class="col mt-2">
                <div class="row">
                  <i class="bi bi-calendar-event"></i>
                    Waktu Pengiriman
                </div>
                <div class="row">
                  <i class="bi bi-wallet"></i>
                    Biaya Pengiriman
                </div>
                <div class="row">
                  <i class="bi bi-person"></i>
                    Nama Kurir
                </div>
                <div class="row">
                  <i class="bi bi-pin-map-fill"></i>
                    Status Perjalanan
                </div>
              </div>
            </div>
          </form>
          
          
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      </body>
    </html>