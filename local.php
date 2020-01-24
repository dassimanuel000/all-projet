<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>INGENIEUR INFORMATIQUE UCAC-ICAM</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link type=""/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<?php

  include 'tete.php';

 ?>
 <body id="">
<div class="ecran">
  <center>
    <div class="div-contain-logo">

      <div class="div-tete-logo1">

      </div>
      <div class="div-tete-logo2">
          <img src="icam.png" height="2em" width="100px" alt="logo" class="img-logo2" />
      </div>

        <div class="div-tete-logo3">

        </div>

  </div>

  </center>
  <br><br><br><br><br><br>
  <br><br><br>
  <div class="text-titre">
    LOCALISATION <br>
    INGENIEUR INFORMATIQUE
  </div>
  <div class="text-titre1">
    Ucac-Icam
  </div>
  <br>
  <center>
    <div class="separation">

    </div>
  </center>
  <br>
  <div class="text-titre1">
    Des ing&eacute;nieurs techniquement comp&eacute;tents et Humainement responsable
  </div>
  <br><br><br>
  <center>
    <div class="div-tete-button">
      <a href="" style=""><button class="button-tete" style="">VISITEZ-NOUS</button></a>
      <a href="" style="margin-left:5%;"><button class="button-tete" style="background:none;">CONTACTEZ-NOUS</button></a>
    </div>
  </center>
</div>

<div class="div-menu">
  <div class="div-menu-button">
     <a href="index.php" class="button-menu">ACCUEIL</a>
     <a href="projet.php" class="button-menu">PROJETS</a>
     <a href="vie.php" class="button-menu">VIE ASSOCIATIVE</a>
     <a href="actu.php"  class="button-menu">ACTUALITES</a>
     <a href="local.php" style="background-color:orangered;color:white;" class="button-menu">LOCALISATION</a>
  </div>
  <div class="div-recherche">
    <input class="button-recherche" type="text" id="mySearch"  placeholder="Search.." title="Type in a category">
    <span class="button-recherche-social" style="font-family:social media" onclick="myFunction()">D</span>
  </div>
</div>
<br><br>
<div class="contain-article">
  <div class="div-social-left">
    <center>
    <br><br><br><br>
    <span class="text-titre1" style="color:dimgrey">
      SUIVEZ - NOUS
      <br>
    </span>
    <br>
    </center>
    <center>
      <div class="separation">

      </div>
    </center>
    <br><br>
  <div class="bloc-social-left">
    <span class="social-left">f</span>
    <span class="social-left">t</span>
    <span class="social-left">_</span>
    <span class="social-left">i</span>
    <span class="social-left">y</span>
  </div>
  </div>
  <br><br>
  <br><br>
  <div class="div-article">
    <br><br>
    <div class="div-contain-article">
      <div class="div-titre-projet">
        <span class="titre-projet">DOUALA</span>
      </div>
      <div class="div-date-projet">
        <span class="date-projet">Fait le 12 Octobre 2019 a 12h 35 min</span>
      </div>
      <br>
      <div class="div-image-projet">
        <img src="fond.jpg" class="image-projet"/>
      </div>
      <div class="div-text-projet">
        <p class="text-projet">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <center>
          <a href="#login_form" id="login_pop"><button class="button-bloc">Int&eacute;resse&eacute;(e)</button></a>
        </center>
      </div>
    </div>
    <br>
    </center>
    <center>
      <div class="separation" style="width:100%;">

      </div>
    </center>
    <br>
    <div class="div-contain-article">
      <div class="div-titre-projet">
        <span class="titre-projet">YANSOKI</span>
      </div>
      <div class="div-date-projet">
        <span class="date-projet">Fait le 12 Octobre 2019 a 12h 35 min</span>
      </div>
      <br>
      <div class="div-image-projet">
        <img src="fond.jpg" class="image-projet"/>
      </div>
      <div class="div-text-projet">
        <p class="text-projet">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <center>
          <a href="#login_form" id="login_pop"><button class="button-bloc">Int&eacute;resse&eacute;(e)</button></a>
        </center>
      </div>

      <style>


      .panel a#login_pop, .panel a#join_pop {
          border: 2px solid #aaa;
          color: #fff;
          text-decoration: none;
          text-shadow: 1px 1px #000;
          -webkit-border-radius: 10px;
          -moz-border-radius: 10px;
          -ms-border-radius: 10px;
          -o-border-radius: 10px;
          border-radius: 10px;
      }
      a#login_pop:hover, a#join_pop:hover {
          border-color: #eee;
      }
      .overlay {
          background-color: rgba(0, 0, 0, 0.6);
          bottom: 0;
          cursor: default;
          left: 0;
          opacity: 0;
          position: fixed;
          right: 0;
          top: 0;
          visibility: hidden;
          z-index: 1;
          -webkit-transition: opacity .5s;
          -moz-transition: opacity .5s;
          -ms-transition: opacity .5s;
          -o-transition: opacity .5s;
          transition: opacity .5s;
      }
      .overlay:target {
          visibility: visible;
          opacity: 1;
      }
      .popup {
          background-color: #fff;
          border: 3px solid #fff;
          display: inline-block;
          left: 50%;
          opacity: 0;
          padding: 15px;
          position: fixed;
          text-align: justify;
          top: 40%;
          visibility: hidden;
          z-index: 10;
          -webkit-transform: translate(-50%, -50%);
          -moz-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          -o-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          -webkit-border-radius: 10px;
          -moz-border-radius: 10px;
          -ms-border-radius: 10px;
          -o-border-radius: 10px;
          border-radius: 10px;
          -webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
          -moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
          -ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
          -o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
          box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
          -webkit-transition: opacity .5s, top .5s;
          -moz-transition: opacity .5s, top .5s;
          -ms-transition: opacity .5s, top .5s;
          -o-transition: opacity .5s, top .5s;
          transition: opacity .5s, top .5s;
      }
      .overlay:target+.popup {
          top: 50%;
          opacity: 1;
          visibility: visible;
      }
      .close {
          height: 30px;
          line-height: 30px;
          position: absolute;
          right: 0;
          text-align: center;
          text-decoration: none;
          top: -15px;
          width: 30px;
          background: url(croix.png);
          background-size: cover;
          background-repeat: no-repeat;
          -webkit-border-radius: 15px;
          -moz-border-radius: 15px;
          -ms-border-radius: 15px;
          -o-border-radius: 15px;
          border-radius: 15px;
      }
      .close:before {
          content: "";
      }
      .close:hover {
          background-color: rgba(64, 128, 128, 0.8);
      }
      .popup p, .popup div {
          margin-bottom: 10px;
      }
      .popup label {
          display: inline-block;
          text-align: center;
      }
      .popup input[type="text"], .popup input[type="password"] {
          border: 1px solid whitesmoke;
          margin: 0;
          padding: 2px;
          -webkit-border-radius: 1px;
          -moz-border-radius:1px;
          -ms-border-radius: 1px;
          -o-border-radius: 1px;
          border-radius: 1px;
      }
      .popup input[type="text"]:hover, .popup input[type="password"]:hover {
          border-color: #555 #888 #888;
      }
      .input-click{
        width: 100%;
        font-family: Phetsarath OT;
        font-size: 20px;
        background-color: white;
      }
      .label-click{
        width: 100%;
        text-align: center;
        font-family: Phetsarath OT;
        font-size: 20px;
        background-color: whitesmoke;
      }

      </style>

      <a href="#x" class="overlay" id="login_form"></a>

      <div class="popup">

          <h2 class="propos">Welcome Guest!</h2>

          <p class="text-titre1" style="color:dimgrey">Please enter your Email and Telephone here</p>
          <div>

              <label for="login" class="label-click">Email</label>
              <br>

              <input type="text" id="login" class="input-click" value="" placeholder="ex : Ucac-Icam@gmail.com"/>
          </div>
          <div>
              <label for="password" class="label-click">Telephone</label>
              <input type="password" id="password" class="input-click" value="" placeholder="+237 6........"/>
          </div>
          <input type="button" style="width:100%;" value="VALIDER" class="button-bloc"/>
          <a class="close" href="#close"></a>
      </div>
      <!-- popup form #2 -->
      <a href="#x" class="overlay" id="join_form"></a>

    </div>
    <br>
    </center>
    <center>
      <div class="separation" style="width:100%;">

      </div>
    </center>
    <br><br>

  </div>
  <br><br>
  <br><br>
  <div class="div-article-right">
    <br><br>
    <br><br>
    <center>
      <div class="div-liste-article">
        <span class="titre-bloc-article">LIEUX</span>
      </div>
    </center>
    <div class="liste-right-article">
      <br>
      <li class="liste-article">Douala</li>
      <li class="liste-article">Cameroun</li>
      <li class="liste-article"></li>
    </div>
  </div>
</div>

<?php

include 'pied.php';

 ?>
