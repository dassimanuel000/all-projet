<?php

                require_once 'connexionbd.php';

                $id = $_GET['id'];

                $req3 = "SELECT * FROM article WHERE id=$id";

                $result3 = $mysqli->query($req3) or die("probleme de modification");

                $resultFinal = mysqli_fetch_assoc($result3);

            ?>

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
                        <a  href="index.php"><i class="fa fa-home fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a class="active-menu" href="ui.php"><i class="fa fa-desktop fa-3x"></i> Modifier la page des Articles</a>
                    </li>
                    <li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Modifier la page des tutoriels</a>
                    </li>
						   <li  >
                        <a class=""  href="blank.php"><i class="fa fa-bar-chart-o fa-3x"></i> Modifier la page des Projets</a>
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
            
            <div class="contain-form-add">
            <form action="modification.php" enctype="multipart/form-data" method="POST" style="width:100%;height:auto;" accept-charset="utf-8">
            <div class="div-add" style="width:100%;height:130vh;">
              <div class="div-input-login" style="background:#323232;width:100%;border-radius:15px 15px 0px 0px;border-bottom: 5px solid orangered;">
                <br>
                <span>AJOUTEZ L'ARTICLE</span>
              </div>
              <br>
              <div class="div-input-login" style="display:inline-flex;">
                <label for="photo" class="label-click">Ajouter la photo Principale</label>
                <input type="file" name="photoP" class="input-click" required/>
              </div>
              <div class="div-input-login" style="display:inline-flex;">
                <label for="photo" class="label-click">Ajouter la photo Secondaire 1</label>
                <input type="file" name="photo1" class="input-click" required/>
              </div>
              <div class="div-input-login" style="display:inline-flex;">
                <label for="photo" class="label-click">Ajouter la photo Secondaire 2</label>
                <input type="file" name="photo2" class="input-click" required/>
              </div>
              <div class="div-input-login" style="display:inline-flex;">
                <label for="photo" class="label-click">Ajouter la photo Secondaire 3</label>
                <input type="file" name="photo3" class="input-click" required/>
              </div>
              <br><br>
                <div class="div-input-login">
                  <label>Theme</label>
                  <input type="text" name="theme" placeholder="   Ajoutez Le theme EX : INFORMATIQUE " value="" required/>
                </div>
                <br><br>
                <div class="div-input-login">
                  <label>Titre</label>
                  <input type="text" name="titre" placeholder="  Ajoutez Le Titre" value="" required/>
                </div>
                <br><br>
                <div class="div-input-login">
                  <label>Auteur de l'article</label>
                  <input type="text" name="auteur" placeholder="   Ajoutez Votre Nom" value="" required/>
                </div>
                <br><br>
                <div class="div-input-login">
                  <label>Date de l'article</label>
                  <input type="text" name="date" placeholder="NE RIEN ECRICE ICI" value="" required readonly/>
                </div>
                <br><br>
                <div class="div-input-login" style="height:10em;">
                  <label>Contenu de l'article ici</label><br>
                    <textarea name="content" class="auto-style7" value=""></textarea>
                </div>
                <div class="div-input-login">
                  <br><br>
                  <center>
                    <input class="button-submit" type="submit" value="VALIDER"/>
                  </center>
                </div>
                <br><br>
                <br><br>
                <br><br>
              </div>
            </form>
          </div>
          <?php

            mysqli_free_result($result3);

            mysqli_close($mysqli);

            ?>
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
