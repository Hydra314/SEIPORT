<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEIPORT</title>
  <link rel="stylesheet" href="styles/swiper-bundle.min.css">
  <link rel="stylesheet" href="styles/carrucel.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="icon" href="SRC/logoblanco.png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


  <?php
  include 'navbar.php'
  ?>

  <section class="home">
    <div class="media-icons">

      <a href="https://www.facebook.com/profile.php?id=100095082026897"><i class="fa-brands fa-facebook mr-2"></i></a>
      <a href="https://wa.me/3141607644?text=Hola,%20quiero%20más%20información."><i class="fa-brands fa-whatsapp"></i></a>
    </div>

    <div class="swiper bg-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="SRC/Carrucel/2.png" alt="">
          <div class="text-content">
            <h2 class="title">SEIPORT</h2>
            <p>SEIPORT una empresa dedicada a la seguridad industrial y 
              comprometida con la seguridad de los trabajdores .</p>
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="SRC/Carrucel/5.jpeg" alt="">
          <div class="text-content">
            <h2 class="title">SEIPORT</h2>
            <p>SEIPORT una empresa especializada en equipos de 
              seguridad personal, comprometida con la protección y el bienestar de los trabajadores.</p>
            
          </div>
        </div>
        <div class="swiper-slide dark-layer">
          <img src="SRC/Carrucel/6.jpg" alt="">
          <div class="text-content">
            <h2 class="title">SEIPORT</h2>
            <p>SEIPORT expertos en seguridad industrial, 
              dedicados a salvaguardar la integridad y la salud de los empleados..</p>
            
          </div>
        </div>
        <div class="swiper-slide">
          <img src="SRC/Carrucel/6.png" alt="">
          <div class="text-content">
            <h2 class="title">SEIPORT</h2>
            <p>SEIPORT empresa líder en seguridad ocupacional, 
              con un firme compromiso con la seguridad y protección de los trabajadores.</p>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-slider-thumbs">
      <div class="swiper-wrapper thumbs-container">
        <img src="SRC/Carrucel/2.png" class="swiper-slide" alt="">
        <img src="SRC/Carrucel/5.jpeg" class="swiper-slide" alt="">
        <img src="SRC/Carrucel/6.jpg" class="swiper-slide" alt="">
        <img src="SRC/Carrucel/.png" class="swiper-slide" alt="">
      </div>
    </div>
  </section>

  <script src="swiper-bundle.min.js"></script>
  <script src="main.js"></script>

  <?php 
  include 'footer.php';
  ?>
</body>
</html>

