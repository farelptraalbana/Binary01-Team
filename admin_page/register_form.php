<?php

@include 'config.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user_form WHERE email = '$email'";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error[] = 'User already exists!';
   } else {
      if ($pass != $cpass) {
         $error[] = 'Passwords do not match!';
      } else {
         $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$hashedPassword','$user_type')";
         mysqli_query($conn, $insert);
         mysqli_close($conn);
         echo '<script>alert("Registrasi akun sukses!"); window.location.href = "admin_page.php";</script>';
         exit();
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      .form-container {
         max-width: 600px;
         margin: 0 auto;
         padding: 20px;
         border: 1px solid #ccc;
         border-radius: 5px;
         background-color: #fff;
      }

      .form-container h3 {
         text-align: center;
         margin-bottom: 20px;
      }

      .form-container input[type="text"],
      .form-container input[type="email"],
      .form-container input[type="password"],
      .form-container select {
         width: 100%;
         padding: 10px;
         margin-bottom: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
         font-size: 14px;
      }

      .form-container input[type="submit"] {
         background-color: #4caf50;
         color: #fff;
         padding: 10px;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         font-size: 16px;
         width: 100%;
      }

      .form-container input[type="submit"]:hover {
         background-color: #45a049;
      }

      .error-msg {
         background-color: #f44336;
         color: #fff;
         padding: 10px;
         text-align: center;
         margin-bottom: 10px;
      }

      .success-msg {
         background-color: #4caf50;
         color: #fff;
         padding: 10px;
         text-align: center;
         margin-bottom: 10px;
         display: none;
      }
   </style>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Daftar Akun</h3>
      <?php
      if (isset($error)) {
         foreach ($error as $error) {
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <input type="text" name="name" required placeholder="Masukkan Nama Anda">
      <input type="email" name="email" required placeholder="Masukkan Email Anda">
      <input type="password" name="password" required placeholder="Masukkan Password Anda">
      <input type="password" name="cpassword" required placeholder="Konfirmasi Password Anda">
      <select name="user_type">
         <option value="admin">Admin</option>
         <option value="kurir">Kurir</option>
         <option value="" disabled selected hidden>---Anda sebagai apa?---</option>
      </select>
      <input type="submit" name="submit" value="Daftar Sekarang" id="btn" class="form-btn">
   </form>

</div>

</body>

</html>