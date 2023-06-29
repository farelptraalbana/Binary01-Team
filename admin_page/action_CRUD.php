<?php

@include '../login/config.php';

// JIKA TOMBOL SIMPAN
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

// JIKA TOMBOL UBAH
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

// JIKA TOMBOL Hapus
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


?>