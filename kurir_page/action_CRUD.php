<?php

@include '../login/config.php';

// JIKA TOMBOL SIMPAN ADMIN
if(isset($_POST['bsimpan'])){
   $simpan = mysqli_query($conn, "INSERT INTO data_barang (no_resi, nama_pengirim, nama_penerima, asal_kiriman, tujuan_barang, waktu_pengiriman, biaya)
   VALUES('$_POST[tresi]',
          '$_POST[tpengirim]',
          '$_POST[tpenerima]',
          '$_POST[tasal]',
          '$_POST[ttujuan]',
          '$_POST[twaktu]',
          '$_POST[tbiaya]')");
   
   //jika simpan sukses
   if($simpan){
      echo"<script>alert('SIMPAN DATA SUKSES!');
      document.location='data_barang.php';
           </script>";
   } else{
      echo"<script>alert('SIMPAN DATA GAGAL!');
      document.location='data_barang.php';
           </script>";
   }
}

// JIKA TOMBOL UBAH Admin
if(isset($_POST['bubah'])){

  //Persiapan Ubah Data
  $ubah = mysqli_query($conn, "UPDATE data_barang SET
                                                      no_resi = '$_POST[tresi]',
                                                      nama_pengirim = '$_POST[tpengirim]',
                                                      nama_penerima = '$_POST[tpenerima]',
                                                      asal_kiriman = '$_POST[tasal]',
                                                      tujuan_barang = '$_POST[ttujuan]',
                                                      waktu_pengiriman = '$_POST[twaktu]',
                                                      biaya = '$_POST[tbiaya]'
                                                    WHERE id_pelanggan = '$_POST[id_pelanggan]'
                                                        ");
  
  //jika simpan sukses
  if($ubah){
     echo"<script>alert('UBAH DATA SUKSES!');
     document.location='data_barang.php';
          </script>";
  } else{
     echo"<script>alert('UBAH DATA GAGAL!');
     document.location='data_barang.php';
          </script>";
  }
}

// JIKA TOMBOL Hapus Admin
if(isset($_POST['bhapus'])){

  //Persiapan Ubah Data
  $hapus = mysqli_query($conn, "DELETE FROM data_barang WHERE id_pelanggan = '$_POST[id_pelanggan]'");
  
  //jika simpan sukses
  if($hapus){
     echo"<script>alert('HAPUS DATA SUKSES!');
     document.location='data_barang.php';
          </script>";
  } else{
     echo"<script>alert('HAPUS DATA GAGAL!');
     document.location='data_barang.php';
          </script>";
  }
}

// JIKA TOMBOL SIMPAN Kurir
if(isset($_POST['bsimpanKurir'])){
   $simpanKurir = mysqli_query($conn, "INSERT INTO data_kurir (nama_kurir, no_kurir, plat_nomor)
   VALUES('$_POST[tkurir]',
          '$_POST[tnomor]',
          '$_POST[tplat]')");
   
   //jika simpan sukses
   if($simpanKurir){
      echo"<script>alert('SIMPAN DATA SUKSES!');
      document.location='data_kurir.php';
           </script>";
   } else{
      echo"<script>alert('SIMPAN DATA GAGAL!');
      document.location='data_kurir.php';
           </script>";
   }
}

// JIKA TOMBOL UBAH Kurir
if(isset($_POST['bubahKurir'])){

  //Persiapan Ubah Data
  $ubahKurir = mysqli_query($conn, "UPDATE data_kurir SET
                                                      nama_kurir = '$_POST[tkurir]',
                                                      no_kurir = '$_POST[tnomor]',
                                                      plat_nomor = '$_POST[tplat]'
                                                    WHERE id_kurir = '$_POST[id_kurir]'
                                                        ");
  
  //jika simpan sukses
  if($ubahKurir){
     echo"<script>alert('UBAH DATA SUKSES!');
     document.location='data_kurir.php';
          </script>";
  } else{
     echo"<script>alert('UBAH DATA GAGAL!');
     document.location='data_kurir.php';
          </script>";
  }
}

// JIKA TOMBOL Hapus
if(isset($_POST['bhapusKurir'])){

  //Persiapan Ubah Data
  $hapusKurir = mysqli_query($conn, "DELETE FROM data_kurir WHERE id_kurir = '$_POST[id_kurir]'");
  
  //jika simpan sukses
  if($hapusKurir){
     echo"<script>alert('HAPUS DATA SUKSES!');
     document.location='data_kurir.php';
          </script>";
  } else{
     echo"<script>alert('HAPUS DATA GAGAL!');
     document.location='data_kurir.php';
          </script>";
  }
}

// JIKA TOMBOL SIMPAN Status
if(isset($_POST['bstatus'])){
   $nama_kurir = $_POST['tkurir'];
   $no_kurir = $_POST['tnomor'];
   $plat_nomor = $_POST['tplat'];
   $status_perjalanan = $_POST['tstatus'];
   $no_resi = $_POST['tresi'];

   // Retrieve id_pelanggan based on no_resi
   $query_pelanggan = "SELECT id_pelanggan FROM data_barang WHERE no_resi = '$no_resi'";
   $result_pelanggan = mysqli_query($conn, $query_pelanggan);
   
   if($result_pelanggan && mysqli_num_rows($result_pelanggan) > 0) {
      $row_pelanggan = mysqli_fetch_assoc($result_pelanggan);
      $id_pelanggan = $row_pelanggan['id_pelanggan'];

      // Insert into status_perjalanan table
      $query = "INSERT INTO status_perjalanan (nama_kurir, no_kurir, plat_nomor, status_perjalanan, id_pelanggan)
             VALUES ('$nama_kurir', '$no_kurir', '$plat_nomor', '$status_perjalanan', '$id_pelanggan')";

      $simpan = mysqli_query($conn, $query);

      //jika simpan sukses
      if($simpan){
         echo "<script>alert('SIMPAN DATA SUKSES!');
         document.location='status_perjalanan.php';
              </script>";
      } else{
         echo "<script>alert('SIMPAN DATA GAGAL! Error: ".mysqli_error($conn)."');
         document.location='status_perjalanan.php';
              </script>";
      }
   } else {
      echo "<script>alert('No Resi not found!');
      document.location='status_perjalanan.php';
           </script>";
   }
}




?>