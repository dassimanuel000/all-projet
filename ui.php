<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CPANEL</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link type="text/css" rel="stylesheet" href="../style.css"/>
        <link type="text/css" rel="stylesheet" href="../style2.css"/>
        <link type="text/css" rel="stylesheet" href="../style1.css"/>
        <link type="text/css" rel="stylesheet" href="../responsive.css"/>
        <link type="text/css" rel="stylesheet" href="../swiper.min.css"/>
        <link type="text/css" rel="stylesheet" href="../navigator.css"/>
        <link type="text/css" rel="stylesheet" href="../aos.css"/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="../swiper1.min.css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
</head>

<!--SCROOL PARALLAX-->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
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
<body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <h3>BLOG UCAC-ICAM</h3>
            </a> 
        </div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : -- &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../UCAC-ICAM.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-home fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a class="active-menu" href="ui.php"><i class="fa fa-desktop fa-3x"></i> Modifier la page des Articles</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Modifier la page des tutoriels</a>
                    </li>
						   <li  >
                        <a   href="blank.html"><i class="fa fa-bar-chart-o fa-3x"></i> Modifier la page des Projets</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
               <h2>Admin Dashboard</h2>   
                  <h5>Welcome Madame. </h5>
              </div>
            </div>
            <hr />
            <div class="row">
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
              <img class="image-article <?php echo ($donnees['photoP']);?>" src="../image/<?php echo ($donnees['photoP']);?>"/>
            </div>
            <ul class="thumb">
              <li><a href="../image/<?php echo ($donnees['photoP']);?>" target="image-article-principale">
                <img class="" src="../image/<?php echo ($donnees['photoP']);?>"/>
              </a></li>
              <li><a href="../image/<?php echo ($donnees['photo1']);?>" target="image-article-principale">
                <img class="" src="../image/<?php echo ($donnees['photo1']);?>"/>
              </a></li>
              <li><a href="../image/<?php echo ($donnees['photo2']);?>" target="image-article-principale">
                <img class="" src="../image/<?php echo ($donnees['photo2']);?>"></img>
              </a></li>
              <li><a href="../image/<?php echo ($donnees['photo3']);?>" target="image-article-principale">
                <img class="" src="../image/<?php echo ($donnees['photo3']);?>"/>
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
          <div class="">
            <div class="form-group">
              
            </div>
            <a href="modifier.php?id=<?php echo ($donnees['id']);?>">
          <button type="" class="btn btn-default" style="background-color: lime!important">MODIFIER</button>
            </a>
            
            
          <button onclick="confirmation()" class="btn btn-primary" style="background-color: orangered!important">SUPPRIMER</button>          
            
            <a href="supprimer.php?id=<?php echo ($donnees['id']);?>">
            <button id="myButton" class="btn btn-primary confirmation" style="background-color: red!important">SUPPRIMER VRAIMENT</button>
            </a>
          </div>
        </div>
        
        <?php

          }

          $reponse->closeCursor();
         ?>
      </div>
<!--


-->

<script type="text/javascript">
                function confirmation() { 
                  document.getElementById('myButton').className = "newClass"; 
                }
            </script>
            <style>
              .newClass{
                opacity:1 !important;
                display:inline !important;
              }
              .confirmation{
                opacity:0;
                display:none;
              }
            </style>
              </div>
            </div>
          </div>
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>
