<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>INGENIEUR INFORMATIQUE UCAC-ICAM</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link type="text/css" rel="stylesheet" href="swiper.min.css"/>
        <link type="text/css" rel="stylesheet" href="aos.css"/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
</head>
<style>

.swiper-container {
width: 100%;
padding-top: 100px;
padding-bottom: 50px;
}
.swiper-slide-index {
background-position: center;
background-size: cover;
width: 250px;
height: 250px;
background: #fff;
}
.swiper-slide-index .imgBx{
 width: 100%;
 height: 200px;
 overflow: hidden;
 z-index: -1;
}
.swiper-slide-index .imgBx img{
 width: 100%;
 background-position: center;
 background-size: cover;
}
.swiper-slide-index .details{
 box-sizing: border-box;
 padding: 10px;
}
.swiper-slide-index .details h3{
 margin: 0;
 padding: 0;
 font-size: 13px;
 text-align: center;
 line-height:normal;
}
.swiper-slide-index .details h3 span{
 font-size: 14px;
 color: orangered;
}

</style>
<?php

  include 'tete.php';

 ?>
<body id="">

  <div class="contain-init">
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
<!--SCROOL PARALLAX-->

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugin/debug.addIndicators.min.js"></script>


<script type="text/javascript">
  var controller = new ScrollMagic.Controller();

  var scene = new ScrollMagic.Scene({
    triggerElement: '.ecran',
    reverse: false
  })
  .setClassToggle('.ecran','text-titre')
  .addIndicators({
    name: 'INDICATIONS',
    indent: 200,
    colorStart: '#fff'
  })
  .addTo(controller);
</script>
<br>
  <div class="container">
        <div class="div-index">
          <?php echo '<img src="11.jpg" class="image-index"'?>
          <section class="detail-index">
            <span class="text-detail-titre"><?php echo 'Projet Evolutif X5'?></span>
            <br>
              <div class="separation-index">

              </div>
            <?php echo "<h4 style='text-align:justify' class='text-detail'>Realisation d'une Antenne new Receptrice</h4>"?>
            <br>
            <button class="button-detail"><a href="#"><?php echo 'Plus De Details'?></a></button>
          </section>
        </div>
        <div class="div-index">
          <?php echo '<img src="1.jpg" class="image-index"'?>
          <?php echo '<section class="detail-index">';?>
            <?php echo '<span class="text-detail-titre">Developpement</span>'?>
            <br>
              <div class="separation-index">

              </div>
            <?php echo "<h4 style='text-align:justify' class='text-detail'>Realisation d'une Antenne new Receptrice</h4>"?>
            <br>
            <button class="button-detail"><a href="#"><?php echo 'Plus De Details'?></a></button>
          <?php echo "</section>";?>
        </div>
        <div class="div-index">
          <?php echo '<img src="UCAC-ICAM.jpg" class="image-index"'?>
          <section class="detail-index">
            <span class="text-detail-titre"><?php echo 'Projet Evolutif X5'?></span>
            <br>
              <div class="separation-index">

              </div>
            <?php echo "<h4 style='text-align:justify' class='text-detail'>Realisation d'une Antenne new Receptrice</h4>"?>
            <br>
            <button class="button-detail"><a href="#"><?php echo 'Plus De Details'?></a></button>
          </section>
        </div>
  </div>

  <div class="container">
        <div class="div-index">
          <?php echo '<img src="fond.jpg" class="image-index"'?>
          <section class="detail-index">
            <span class="text-detail-titre"><?php echo 'Innovation O2'?></span>
            <br>
              <div class="separation-index">

              </div>
            <?php echo "<h4 style='text-align:justify' class='text-detail'>Realisation d'une Antenne new Receptrice</h4>"?>
            <br>
            <button class="button-detail"><a href="#"><?php echo 'Plus De Details'?></a></button>
          </section>
        </div>
        <div class="div-index">
          <?php echo '<img src="fond1.png" class="image-index"'?>
          <section class="detail-index">
            <span class="text-detail-titre"><?php echo 'Projet Evolutif X5'?></span>
            <br>
              <div class="separation-index">

              </div>
            <?php echo "<h4 style='text-align:justify' class='text-detail'>Realisation d'une Antenne new Receptrice</h4>"?>
            <br>
            <button class="button-detail"><a href="#"><?php echo 'Plus De Details'?></a></button>
          </section>
        </div>
        <div class="div-index">
          <?php echo '<img src="3.jpg" class="image-index"'?>
          <section class="detail-index">
            <span class="text-detail-titre"><?php echo 'Projet Evolutif X5'?></span>
            <br>
              <div class="separation-index">

              </div>
            <?php echo "<h4 style='text-align:justify' class='text-detail'>Realisation d'une Antenne new Receptrice</h4>"?>
            <br>
            <button class="button-detail"><a href="#"><?php echo 'Plus De Details'?></a></button>
          </section>
        </div>
  </div>
</div>

                                    <div class="text-titre1" style="color:dimgrey">
                                        NOS ENCADREURS
                                      </div>
                                      <br>
                                      <center>
                                        <div class="separation">

                                        </div>
                                      </center>
                                      <br><br>

                                      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                                      <script src="aos.js"></script>
                                      <script type="text/javascript">
                                          AOS.init({
                                            offset: 200,
                                            duration: 1500,
                                          });
                                      </script>

                                      <div class="contain-encadreur">

                                        <div class="div-encadreur1" data-aos="zoom-in">
                                          <br><br><br><br>
                                            <div class="div-nom-encadreur encad1" style="background:url(1.jpg)">
                                              <button class="nom-encadreur">
                                                <span style="" class="social-encadreur">'</span>
                                                <span style="font-family:Phetsarath OT;margin-left: auto;">Mr TANGUI K.</span>
                                              </button>
                                            </div>
                                            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="div-nom-encadreur encad1" style="background:url(11.jpg)">
                                              <button class="nom-encadreur">
                                                <span style="" class="social-encadreur"> f</span>
                                                <span style="font-family:Phetsarath OT;margin-left: auto;">Mr FELLET</span>
                                              </button>
                                            </div>
                                          </div>
                                          <div class="div-encadreur2">
                                            <div data-aos="fade-up" data-aos-anchor-placement="top-center" class="div-nom-encadreur2" style="background:url(fond.jpg)">
                                              <button class="nom-encadreur">
                                                <span style="" class="social-encadreur"> A</span>
                                                <span style="font-family:Phetsarath OT;margin-left: auto;">Mr ALoys</span>
                                              </button>
                                            </div>
                                            <div data-aos="flip-left" class="div-nom-encadreur2" style="background:url(3.jpg)">
                                              <button class="nom-encadreur">
                                                <span style="" class="social-encadreur"> m</span>
                                                <span style="font-family:Phetsarath OT;margin-left: auto;">Mr .</span>
                                              </button>
                                            </div>
                                            <div class="div-nom-encadreur2"  data-aos="zoom-out-right" style="background:url(1.jpg)">
                                              <button class="nom-encadreur">
                                                <span style="" class="social-encadreur" style=""> W</span>
                                                <span style="font-family:Phetsarath OT;margin-left: auto;">Mme Junie</span>
                                              </button>
                                            </div>
                                            <div class="div-nom-encadreur2 encadreurJ" data-aos="zoom-in-out" data-aos-duration="2500" style="background:url(11.jpg)">
                                              <button class="nom-encadreur">
                                                <span style="" class="social-encadreur"> p</span>
                                                <span style="font-family:Phetsarath OT;margin-left: auto;">Mr .</span>
                                              </button>
                                            </div>
                                          </div>

                                      </div>
                                      <br><br><br><br>
                                      <div class="text-titre1" style="color:dimgrey">
                                        NOTRE FAMILLE
                                      </div>
                                      <br>
                                      <center>
                                        <div class="separation">

                                        </div>
                                      </center>
                                      <br><br>
                                      <div class="contain-etudiant">

                                        <div class="swiper-container" data-aos="flip-right">
                                          <div class="swiper-wrapper">
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="cv.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="cv.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="cv.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="cv.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="cv.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="cv.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="cv.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="3.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          <div class="swiper-slide swiper-slide-index">
                                            <div class="imgBx">
                                              <img src="3.jpg"/>
                                            </div>
                                            <div class="details">
                                              <h3>Dassi<br><span>Web Designer</span></h3>
                                            </div>
                                          </div>
                                          </div>
                                          <!-- Add Pagination -->
                                          <div class="swiper-pagination"></div>
                                          </div>
                                          <div class="swiper-container" data-aos="zoom-in-down">
                                            <div class="swiper-wrapper">
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="cv.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="cv.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="cv.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="cv.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="cv.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="cv.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="cv.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="3.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-index">
                                              <div class="imgBx">
                                                <img src="3.jpg"/>
                                              </div>
                                              <div class="details">
                                                <h3>Dassi<br><span>Web Designer</span></h3>
                                              </div>
                                            </div>
                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-container" data-aos="zoom-in-right">
                                              <div class="swiper-wrapper">
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="cv.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="cv.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="cv.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="cv.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="cv.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="cv.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="cv.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="3.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              <div class="swiper-slide swiper-slide-index">
                                                <div class="imgBx">
                                                  <img src="3.jpg"/>
                                                </div>
                                                <div class="details">
                                                  <h3>Dassi<br><span>Web Designer</span></h3>
                                                </div>
                                              </div>
                                              </div>
                                              <!-- Add Pagination -->
                                              <div class="swiper-pagination"></div>
                                              </div>
                                          <script type="text/javascript" src="swiper.min.js"></script>
                                          <script>
                                                var swiper = new Swiper('.swiper-container', {
                                                effect: 'coverflow',
                                                grabCursor: true,
                                                centeredSlides: true,
                                                slidesPerView: 'auto',
                                                coverflowEffect: {
                                                rotate: 50,
                                                stretch: 0,
                                                depth: 100,
                                                modifier: 1,
                                                slideShadows : true,
                                                },
                                                pagination: {
                                                el: '.swiper-pagination',
                                                },
                                                });
                                                </script>

                                      </div>

                                      <?php

                                      include 'pied.php';

                                       ?>






          </body>
</html>
