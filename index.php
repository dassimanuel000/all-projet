<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>INGENIEUR INFORMATIQUE UCAC-ICAM</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link type="text/css" rel="stylesheet" href="swiper.min.css"/>
        <link type="text/css" rel="stylesheet" href="aos.css"/>
        <link type="text/css" rel="stylesheet" href="navigator.css"/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="swiper1.min.css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
        <link href="https://maxcdn.bootstrap.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

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

<style>


</style>
<header class="header-menu">
  <div class="contain-header">
    <div class="contain-header-logo">
      <?php echo "<img src='UCAC-ICAM.jpg' class='header-logo'/>"; ?>
    </div>
  </div>
  <div class="contain-header-menu">
    <div class="div-header-menu">
      <a href="" class="lien-menu" style="background:orangered;"><span class="lien-menu-social">H</span></a>
      <a href="article.php" class="lien-menu menu1">ARTICLES</a>
      <a href="" class="lien-menu">TUTORIELS</a>
      <a href="" class="lien-menu menu1">LOCALISATION</a>
      <a href="" class="lien-menu">PROJETS</a>
      <a href="login.php" class="lien-menu menu1">CONNEXION</a>
    </div>
    <div class="toggle">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div class="menu-recherche">
      <input type="text" id="" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
      <span class="button-recherche-social" style="font-family:Heydings Common Icons" onclick="myFunction()">M</span>
    </div>
  </div>
</header>
<br>
<body id="top" onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onMouseOver="window.status='Il est strictement interdit de copier les images sur ce site'; return true;">
  <div class="body-titre">
    <div class="div-body-tire">
      <span style="">ARTICLES RECENTS</span>
    </div>
  </div>
  <br>

  <?php
  try{
      // On se connecte à MySQL
      $bdd = new PDO('mysql:host=localhost;dbname=BLOG;charset=utf8', 'root', '');
  }catch(Exception $e){
      // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
  }

  ?>

  <div class="contain-body-article">
    <div class="body-article">
        <div class="body-article-first">

          <?php


              $reponse = $bdd->query('SELECT * FROM index1');

              // On affiche chaque entrée une à une
              while ($donnees = $reponse->fetch())
              {

           ?>


          <a href="#" style="text-decoration:none">
          <img src="image/<?php echo ($donnees['image_fond1']);?>" class="body-article-image"/>
          <button class="button-article"><?php echo ($donnees['promo1']);?></button>
          <div class="div-article-detail">
              <h3><?php echo ($donnees['detail1']);?></h3>
          </div>
          <div class="div-article-titre">
              <h3><?php echo ($donnees['titre1']);?></h3>
              <h6>UCAC-ICAM</h6>
          </div>
          </a>
          <?php

        }

           ?>
        </div>

      <div class="body-article-second">
        <?php


            $reponse2 = $bdd->query('SELECT * FROM index2');

            // On affiche chaque entrée une à une
            while ($donnees2 = $reponse2->fetch())
            {

         ?>
        <a href="#" style="text-decoration:none">
          <img src="image/<?php echo ($donnees2['image_fond2']);?>" class="body-article-image"/>
          <button class="button-article"><?php echo ($donnees2['promo2']);?></button>
          <div class="div-article-detail">
              <h3><?php echo ($donnees2['detail2']);?></h3>
          </div>
          <div class="div-article-titre">
              <h3><?php echo ($donnees2['titre2']);?></h3>
              <h6>UCAC-ICAM</h6>
          </div>
        </a>
        <?php

      }

         ?>
      </div>
      </div>
    <div class="body-article-left">
      <?php


          $reponse3 = $bdd->query('SELECT * FROM index3');

          // On affiche chaque entrée une à une
          while ($donnees3 = $reponse3->fetch())
          {

       ?>
      <div class="body-article-first-left">
        <a href="#" style="text-decoration:none">
          <img src="image/<?php echo ($donnees3['image_fond3']);?>" class="body-article-image2"/>
          <button class="button-article"><?php echo ($donnees3['promo3']);?></button>
          <div class="div-article-detail-left">
              <h3><?php echo ($donnees3['titre3']);?></h3>
          </div>
        </a>
      </div>
    <?php
        }
    ?>
      <br>
      <?php


          $reponse4 = $bdd->query('SELECT * FROM index4');

          // On affiche chaque entrée une à une
          while ($donnees4 = $reponse4->fetch())
          {

       ?>
      <div class="body-article-second-left">
        <a href="#" style="text-decoration:none">
          <img src="image/<?php echo ($donnees4['image_fond4']);?>" class="body-article-image2"/>
          <button class="button-article"><?php echo ($donnees4['promo4']);?></button>
          <div class="div-article-detail-left">
              <h3><?php echo ($donnees4['titre4']);?></h3>
          </div>
        </a>
      </div>
      <?php
          }
      ?>
    </div>
  </div>

  <div class="body-promotion">
    <br><br><br><br>
    <div class="body-titre">
      <div class="div-body-tire">
        <span style="">NOS PROJETS</span>
      </div>
    </div>
    <br><br>
    <div class="contain-ecran">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php


              $reponse_projet1 = $bdd->query('SELECT * FROM index_projet1');

              // On affiche chaque entrée une à une
              while ($donnees_projet1 = $reponse_projet1->fetch())
              {

           ?>
          <div class="swiper-slide">
            <div class="card">
              <img src="image/<?php echo ($donnees_projet1['image_projet1']);?>" class="image-swiper"/>
              <div class="sliderText">
                <span><?php echo ($donnees_projet1['titre_projet1']);?></span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span> <?php echo ($donnees_projet1['detail_projet1']);?></span><br>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
          <?php
              }
          ?>
          <?php


              $reponse_projet2 = $bdd->query('SELECT * FROM index_projet2');

              // On affiche chaque entrée une à une
              while ($donnees_projet2 = $reponse_projet2->fetch())
              {

           ?>
          <div class="swiper-slide">
            <div class="card">
              <img src="image/<?php echo ($donnees_projet2['image_projet2']);?>" class="image-swiper"/>
              <div class="sliderText">
                <span><?php echo ($donnees_projet2['titre_projet2']);?></span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span> <?php echo ($donnees_projet2['detail_projet2']);?></span><br>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
          <?php
              }
          ?>
          <?php


              $reponse_projet3 = $bdd->query('SELECT * FROM index_projet3');

              // On affiche chaque entrée une à une
              while ($donnees_projet3 = $reponse_projet3->fetch())
              {

           ?>
          <div class="swiper-slide">
            <div class="card">
              <img src="image/<?php echo ($donnees_projet3['image_projet3']);?>" class="image-swiper"/>
              <div class="sliderText">
                <span style="width:90%;margin-left:10%;"><?php echo ($donnees_projet3['titre_projet3']);?></span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span>  <?php echo ($donnees_projet3['detail_projet3']);?></span><br>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
          <?php
              }
          ?>
          <?php


              $reponse_projet4 = $bdd->query('SELECT * FROM index_projet4');

              // On affiche chaque entrée une à une
              while ($donnees_projet4 = $reponse_projet4->fetch())
              {

           ?>
          <div class="swiper-slide">
            <div class="card">
              <img src="image/<?php echo ($donnees_projet4['image_projet4']);?>" class="image-swiper"/>
              <div class="sliderText">
                <span style="width:90%;margin-left:10%;"><?php echo ($donnees_projet4['titre_projet4']);?></span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span>  <?php echo ($donnees_projet4['detail_projet4']);?></span><br>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
          <?php
              }
          ?>
          <?php


              $reponse_projet5 = $bdd->query('SELECT * FROM index_projet5');

              // On affiche chaque entrée une à une
              while ($donnees_projet5 = $reponse_projet5->fetch())
              {

           ?>
          <div class="swiper-slide">
            <div class="card">
              <img src="image/<?php echo ($donnees_projet5['image_projet5']);?>" class="image-swiper"/>
              <div class="sliderText">
                <span style="width:90%;margin-left:10%;"><?php echo ($donnees_projet5['titre_projet5']);?></span>
                <h6>UCAC-ICAM</h6>
              </div>
              <div class="content-slide">
                <span>  <?php echo ($donnees_projet5['detail_projet5']);?></span><br>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
          <?php
              }
          ?>
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
    <br><br><br>
    </div>

    <br><br><br><br>
    <div class="body-titre">
      <div class="div-body-tire">
        <span style="">LES TUTORIELS</span>
      </div>
    </div>
    <br><br>
    <div class="body-container-tutoriel">
      <?php


          $reponse_tuto1 = $bdd->query('SELECT * FROM index_tuto1');

          // On affiche chaque entrée une à une
          while ($donnees_tuto1 = $reponse_tuto1->fetch())
          {

       ?>
          <div class="div-index">
            <img src="image/<?php echo ($donnees_tuto1['image_tuto1']);?>" class="image-index"/>
            <section class="detail-index">
              <br>
              <span class="text-detail-titre">
                <?php echo ($donnees_tuto1['titre_tuto1']);?>
              </span>
              <br>
                <div class="separation-index">

                </div>
              <h4 style="text-align:justify;" class="text-detail"><?php echo ($donnees_tuto1['detail_tuto1']);?></h4>
              <br>
              <button class="button-detail">
                <a href="#"><?php echo 'Plus De Details'?></a>
              </button>
            </section>
          </div>
          <?php
              }
          ?>
          <?php


              $reponse_tuto2 = $bdd->query('SELECT * FROM index_tuto2');

              // On affiche chaque entrée une à une
              while ($donnees_tuto2 = $reponse_tuto2->fetch())
              {

           ?>
          <div class="div-index">
            <img src="image/<?php echo ($donnees_tuto2['image_tuto2']);?>" class="image-index"/>
            <section class="detail-index">
              <br>
              <span class="text-detail-titre">
                <?php echo ($donnees_tuto2['titre_tuto2']);?>
              </span>
              <br>
                <div class="separation-index">

                </div>
              <h4 style="text-align:justify;" class="text-detail"><?php echo ($donnees_tuto2['detail_tuto2']);?></h4>
              <br>
              <button class="button-detail">
                <a href="#"><?php echo 'Plus De Details'?></a>
              </button>
            </section>
          </div>
          <?php
              }
          ?>
          <?php


              $reponse_tuto3 = $bdd->query('SELECT * FROM index_tuto3');

              // On affiche chaque entrée une à une
              while ($donnees_tuto3 = $reponse_tuto3->fetch())
              {

           ?>
          <div class="div-index">
            <img src="image/<?php echo ($donnees_tuto3['image_tuto3']);?>" class="image-index"/>
            <section class="detail-index">
              <br>
              <span class="text-detail-titre">
                <?php echo ($donnees_tuto3['titre_tuto3']);?>
              </span>
              <br>
                <div class="separation-index">

                </div>
              <h4 style="text-align:justify;" class="text-detail"><?php echo ($donnees_tuto3['detail_tuto3']);?></h4>
              <br>
              <button class="button-detail">
                <a href="#"><?php echo 'Plus De Details'?></a>
              </button>
            </section>
          </div>
          <?php
              }
          ?>
    </div>
    <div class="container">
      <?php


          $reponse_tuto4 = $bdd->query('SELECT * FROM index_tuto4');

          // On affiche chaque entrée une à une
          while ($donnees_tuto4 = $reponse_tuto4->fetch())
          {

       ?>
      <div class="div-index">
        <img src="image/<?php echo ($donnees_tuto4['image_tuto4']);?>" class="image-index"/>
        <section class="detail-index">
          <br>
          <span class="text-detail-titre">
            <?php echo ($donnees_tuto4['titre_tuto4']);?>
          </span>
          <br>
            <div class="separation-index">

            </div>
          <h4 style="text-align:justify;" class="text-detail"><?php echo ($donnees_tuto4['detail_tuto4']);?></h4>
          <br>
          <button class="button-detail">
            <a href="#"><?php echo 'Plus De Details'?></a>
          </button>
        </section>
      </div>
      <?php
          }
      ?>
      <?php


          $reponse_tuto5 = $bdd->query('SELECT * FROM index_tuto5');

          // On affiche chaque entrée une à une
          while ($donnees_tuto5 = $reponse_tuto5->fetch())
          {

       ?>
      <div class="div-index">
        <img src="image/<?php echo ($donnees_tuto5['image_tuto5']);?>" class="image-index"/>
        <section class="detail-index">
          <br>
          <span class="text-detail-titre">
            <?php echo ($donnees_tuto5['titre_tuto5']);?>
          </span>
          <br>
            <div class="separation-index">

            </div>
          <h4 style="text-align:justify;" class="text-detail"><?php echo ($donnees_tuto5['detail_tuto5']);?></h4>
          <br>
          <button class="button-detail">
            <a href="#"><?php echo 'Plus De Details'?></a>
          </button>
        </section>
      </div>
      <?php
          }
      ?>
      <?php


          $reponse_tuto6 = $bdd->query('SELECT * FROM index_tuto6');

          // On affiche chaque entrée une à une
          while ($donnees_tuto6 = $reponse_tuto6->fetch())
          {

       ?>
      <div class="div-index">
        <img src="image/<?php echo ($donnees_tuto6['image_tuto6']);?>" class="image-index"/>
        <section class="detail-index">
          <br>
          <span class="text-detail-titre">
            <?php echo ($donnees_tuto6['titre_tuto6']);?>
          </span>
          <br>
            <div class="separation-index">

            </div>
          <h4 style="text-align:justify;" class="text-detail"><?php echo ($donnees_tuto6['detail_tuto6']);?></h4>
          <br>
          <button class="button-detail">
            <a href="#"><?php echo 'Plus De Details'?></a>
          </button>
        </section>
      </div>
      <?php
          }
      ?>
    </div>


    <br><br><br><br>
    <div class="body-titre">
      <div class="div-body-tire">
        <span style="">NOS ENCADREURS</span>
      </div>
    </div>
    <br><br>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="aos.js"></script>
  <script type="text/javascript">
      AOS.init({
        offset: 200,
        duration: 1500,
      });
  </script>

  <div class="contain-encadreur">

      <div class="div-encadreur2" data-aos="zoom-in">
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="div-nom-encadreur2" style="background:url(fond.jpg)">
          <button class="nom-encadreur">
            <span style="" class="social-encadreur">'</span>
            <span style="font-family:Phetsarath OT;margin-left: auto;">Mr TANGUI</span>
          </button>
        </div>
        <div data-aos="flip-left" class="div-nom-encadreur2" style="background:url(1.jpg)">
          <button class="nom-encadreur">
            <span style="" class="social-encadreur"> f</span>
            <span style="font-family:Phetsarath OT;margin-left: auto;">Mr FELLET</span>
          </button>
        </div>
        <div class="div-nom-encadreur2"  data-aos="zoom-out-right" style="background:url(1.jpg)">
          <button class="nom-encadreur">
            <span style="" class="social-encadreur"> f</span>
            <span style="font-family:Phetsarath OT;margin-left: auto;">Mme E</span>
          </button>
        </div>
        <div data-aos="fade-down" data-aos-duration="1200" data-aos-anchor-placement="top" class="div-nom-encadreur2" style="background:url(fond.jpg)">
          <button class="nom-encadreur">
            <span style="" class="social-encadreur"> A</span>
            <span style="font-family:Phetsarath OT;margin-left: auto;">Mr.</span>
          </button>
        </div>
      </div>
      <div class="div-encadreur2">
        <div data-aos="fade-down" data-aos-duration="1200" data-aos-anchor-placement="top" class="div-nom-encadreur2" style="background:url(fond.jpg)">
          <button class="nom-encadreur">
            <span style="" class="social-encadreur"> A</span>
            <span style="font-family:Phetsarath OT;margin-left: auto;">Mr .</span>
          </button>
        </div>
        <div data-aos="flip-left" class="div-nom-encadreur2" style="background:url(3.jpg)">
          <button class="nom-encadreur">
            <span style="" class="social-encadreur"> m</span>
            <span style="font-family:Phetsarath OT;margin-left: auto;">Mme Junie</span>
          </button>
        </div>
        <div class="div-nom-encadreur2"  data-aos="zoom-out-right" style="background:url(1.jpg)">
          <button class="nom-encadreur">
            <span style="" class="social-encadreur" style=""> W</span>
            <span style="font-family:Phetsarath OT;margin-left: auto;"></span>
          </button>
        </div>
        <div data-aos="fade-down" data-aos-duration="1200" data-aos-anchor-placement="top" class="div-nom-encadreur2" style="background:url(fond.jpg)">
          <button class="nom-encadreur">
            <span style="" class="social-encadreur"> A</span>
            <span style="font-family:Phetsarath OT;margin-left: auto;">Mr .</span>
          </button>
        </div>
      </div>
<br><br><br><br>
  </div>
  <br><br><br><br>
  <div class="body-titre">
    <div class="div-body-tire">
      <span style="">NOTRE FAMILLE</span>
    </div>
  </div>
  <br><br>
  <?php

  include 'defilement1.php';

   ?>
   <?php

   include 'pied.php';

    ?>
</body>
</html>
