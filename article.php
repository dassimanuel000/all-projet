<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>INGENIEUR INFORMATIQUE UCAC-ICAM</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link type="text/css" rel="stylesheet" href="swiper.min.css"/>
        <link type="text/css" rel="stylesheet" href="navigator.css"/>
        <link type="text/css" rel="stylesheet" href="aos.css"/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="swiper1.min.css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
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
<header class="header-menu">
  <div class="contain-header">
    <div class="contain-header-logo">
      <?php echo "<img src='UCAC-ICAM.jpg' class='header-logo'/>"; ?>
    </div>
  </div>
  <div class="contain-header-menu">
    <div class="div-header-menu">
      <a href="index.php" class="lien-menu"><span class="lien-menu-social">H</span></a>
      <a href="article.php" style="background:orangered;" class="lien-menu">ARTICLES</a>
      <a href="" class="lien-menu">TUTORIELS</a>
      <a href="" class="lien-menu">LOCALISATION</a>
      <a href="" class="lien-menu">PROJETS</a>
      <a href="login.php" class="lien-menu">CONNEXION</a>
    </div>
    <div class="menu-recherche">
      <input type="text" id="" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
      <span class="button-recherche-social" style="font-family:Heydings Common Icons" onclick="myFunction()">M</span>
    </div>
  </div>
</header>
<br>
<body class="">
  <div class="body-titre">
    <div class="div-body-tire">
      <span style="">LES PLUS VUS</span>
    </div>
  </div>
  <br>

  <div class="body-contain-article">


      <div class="body-div-article">
        <?php
        try{
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=BLOG;charset=utf8', 'root', '');
        }catch(Exception $e){
            // En cas d'erreur, on affiche un message et on arrête tout
              die('Erreur : '.$e->getMessage());
        }

          $reponse = $bdd->query('SELECT * FROM article');

          // On affiche chaque entrée une à une
          while ($donnees = $reponse->fetch())
          {
        ?>
        <div class="div-article-bloc">
          <div class="body-div-article-image">
            <div class="image-article-principale">
              <img class="image-article <?php echo ($donnees['photoP']);?>" src="image/<?php echo ($donnees['photoP']);?>"/>
            </div>
            <ul class="thumb">
              <li><a href="image/<?php echo ($donnees['photoP']);?>" target="image-article-principale">
                <img class="" src="image/<?php echo ($donnees['photoP']);?>"/>
              </a></li>
              <li><a href="image/<?php echo ($donnees['photo1']);?>" target="image-article-principale">
                <img class="" src="image/<?php echo ($donnees['photo1']);?>"/>
              </a></li>
              <li><a href="image/<?php echo ($donnees['photo2']);?>" target="image-article-principale">
                <img class="" src="image/<?php echo ($donnees['photo2']);?>"></img>
              </a></li>
              <li><a href="image/<?php echo ($donnees['photo3']);?>" target="image-article-principale">
                <img class="" src="image/<?php echo ($donnees['photo3']);?>"/>
              </a></li>
            </ul>
            <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
            <script type="text/javascript">
              $(document).ready(function(){
                $('.thumb a').click(function(e) {
                  e.preventDefault();
                  $('.<?php echo ($donnees['photoP']);?> img').attr("src", $(this).attr("href"));
                })
              })
            </script>
          </div>
          <div class="theme-article">
            <h3 style="transform: skewX(-30deg);">
              <?php echo ($donnees['theme']);?>
            </h3>
          </div>
          <div class="div-titre-article">
            <h3 style="">
              <?php echo ($donnees['titre']);?>
            </h3>
          </div>
          <div class="signature-article">
            <h3 style="">
              <?php echo "Redig&eacute; Par ".$donnees['autre']." Le ".$donnees['dateJ']; ?>
            </h3>
          </div>
          <div class="div-detail-article">
            <h3 style="">
              <?php echo ($donnees['content']);?>
            </h3>
          </div>
        </div>
        <?php

          }

          $reponse->closeCursor();
         ?>
      </div>

      <div class="body-div-article-liste">
        <div class="div-liste-article-detail">
          <div class="div-liste-article-image">
            <?php echo "<img src='cv.jpg' class='image-liste-article'/>"?>
          </div>
          <div class="liste-detail-article">
            <a href=""><?php echo "<h3 class='bloc-article-liste-detail'>Bonjour Madame</h3>"?></a>
            <?php echo "<h4 class='bloc-article-liste-detail-text'>Details en question Madame</h4>"?>
          </div>
        </div>
      </div>
  </div>

</body>
</html>
