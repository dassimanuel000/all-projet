<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>CPANEL</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="navigator.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="swiper1.min.css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
</head>
<?php


  include 'connexionbd.php';

?>

<style>
 .header1{

 }
</style>

  <header class="header-menu">
    <div class="contain-header">
      <div class="contain-header-logo">
        <?php echo "<img src='UCAC-ICAM.jpg' class='header-logo'/>"; ?>
      </div>
    </div>
    <div class="contain-header-menu header1">
      <div class="div-header-menu">
        <a href="cpanel.php" class="lien-menu" style="background:orangered;"><span class="lien-menu-social">H</span></a>
        <a href="index.php" class="lien-menu">RETOUR SUR LE BLOG</a>
      </div>
      <div class="menu-recherche">
        <input type="text" id="" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
        <span class="button-recherche-social" style="font-family:Heydings Common Icons" onclick="myFunction()">M</span>
      </div>
    </div>
  </header>
  <body>
    <div class="contain-cpanel">
      <div class="contain-cpanel-liste">
        <ul>
          <a href="editPP.php">
            <li>Modifier la premiere page</li>
          </a>
          <a href="">
            <li>Modifier la page des articles</li>
          </a>
          <a href="">
            <li>Modifier la page des tutoriels</li>
          </a>
          <a href="">
            <li>Modifier la page des projet</li>
          </a>
        </ul>
      </div>
      <div class="contain-cpanel-body">
        <div class="">

        </div>
      </div>
    </div>
  </body>

 </html>
