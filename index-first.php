<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>INGENIEUR INFORMATIQUE UCAC-ICAM</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link type="text/css" rel="stylesheet" href="swiper1.min.css"/>
        <link type="text/css" rel="stylesheet" href="aos.css"/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
</head>

<?php

  include 'tete.php';

 ?>
<body id="">

  <div class="contain-init1">
    <center>
      <div class="div-contain-logo">

          <div class="div-tete-logo1">

          </div>
          <div class="div-tete-logo2">
          <center>
              <img src="UCAC-ICAM.jpg" height="2em" width="100px" alt="logo" class="img-logo2" />
            </center>
          </div>

          <div class="div-tete-logo3">

          </div>
      </div>
    </center>
    <br><br>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card">
              <?php echo '<img src="cv.jpg" class="image-swiper"/>'?>
              <div class="sliderText">
                <span>Projet Evolutif</span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span> Le Developpement intemporelle</span>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <?php echo '<img src="1.jpg" class="image-swiper"/>'?>
              <div class="sliderText">
                <span>Projet Evolutif</span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span> Le Developpement intemporelle</span>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <?php echo '<img src="11.jpg" class="image-swiper"/>'?>
              <div class="sliderText">
                <span>Projet Evolutif</span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span> Le Developpement intemporelle</span>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
              <?php echo '<img src="fond1.jpg" class="image-swiper"/>'?>
              <div class="sliderText">
                <span>Developpement</span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span> Le Developpement intemporelle</span>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script type="text/javascript" src="swiper1.min.js"></script>
    <script>
          var swiper = new Swiper('.swiper-container', {
          effect: 'coverflow',
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
          rotate: 10,
          stretch: 0,
          depth: 400,
          modifier: 9 ,
          slideShadows : true,
          },
          pagination: {
          el: '.swiper-pagination',
          },
          });
    </script>

    <!------------------------------------->
    <div class="slide hi-slide">
      <div class="hi-prev"></div>
      <div class="hi-next"></div>
      <ul>
        <li>
          <?php echo "<img src='3.jpg' alt='img'"; ?>
        </li>
        <li>
          <?php echo "<img src='3.jpg' alt='img'"; ?>
        </li>
        <li>
          <?php echo "<img src='3.jpg' alt='img'"; ?>
        </li>
        <li>
          <?php echo "<img src='3.jpg' alt='img'"; ?>
        </li>
        <li>
          <?php echo "<img src='3.jpg' alt='img'"; ?>
        </li>
        <li>
          <?php echo "<img src='3.jpg' alt='img'"; ?>
        </li>
        <li>
          <?php echo "<img src='3.jpg' alt='img'"; ?>
        </li>
      </ul>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="jquery.hislide.js"></script>
    <script type="text/javascript">
      $('.slide').hiSlide();
    </script>
  </div>
</body>


</html>
