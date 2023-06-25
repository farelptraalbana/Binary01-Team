<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="kotak_header"></div>
      <img src="../Dashboard/asset/logo.png" alt="">
      <div class="tentang">
        <h2>Tentang Kami</h2>
      </div>
      <div class="line"><img src="../Dashboard/asset/line.png" alt=""></div>
      <div class="login">
        <div class="kotak_login">
          <img src="../Dashboard/asset/icon_profile.png" alt="">
          <h2><a href="../login/login_form.php">Login/Register</a></h2>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="imgslide fade">
        <img src="../Dashboard/asset/slider1.png" alt="">
      </div>

      <div class="imgslide fade">
        <img src="../Dashboard/asset/slider2.png" alt="">
      </div>

      <div class="imgslide fade">
        <img src="../Dashboard/asset/slider3.png" alt="">
      </div>

      <a class="prev" onClick="nextslide(-1)">&#10094;</a>
      <a class="next" onClick="nextslide(1)">&#10095;</a> 
    </div>
    <script>
      var slideIndex = 1;
          showSlide(slideIndex);

      function nextslide(n){
          showSlide(slideIndex += n);
      }

      function dotslide(n){
          showSlide(slideIndex = n);
      }

      function showSlide(n) {
          var i;
          var slides = document.getElementsByClassName("imgslide");
          
          if (n > slides.length) {
              slideIndex = 1
          }
          if (n < 1) {
              slideIndex = slides.length;
          }
          for (i = 0; i < slides.length; i++) {
              
              slides[i].style.display = "none";
          }

          slides[slideIndex - 1].style.display = "block";

          dot[slideIndex - 1].className += " active";
      }
  </script>
    <div class="footer">
      <h1>Lacak Kiriman</h1>
      <div class="kotak_lacak">
        <input type="number" name="lacakan" class="pelacakan" required placeholder="Masukkan nomor resi kiriman anda">
      </div>
    </div>
  </div>
</body>
</html>