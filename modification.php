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
            <?php

try {
  $dbh = new PDO('mysql:host=localhost;dbname=BLOG', 'root', '');
  array(PDO::ATTR_PERSISTENT => true);
  echo "Connecté\n";
}catch (Exception $e){
  die("Impossible de se connecter A LA BDD: " . $e->getMessage());
}


  $photoP=$_FILES['photoP']['name'];
  $photoP_type=$_FILES['photoP']['type'];
  $file_tmp_nameP = $_FILES['photoP']['tmp_name'];
  $file_destP = '../image/'.$photoP;
  move_uploaded_file($file_tmp_nameP, $file_destP);

  $photo1 = $_FILES['photo1']['name'];
  $photo1_type = $_FILES['photo1']['type'];
  $file_tmp_name1 = $_FILES['photo1']['tmp_name'];
  $file_dest1 = '../image/'.$photo1;
  move_uploaded_file($file_tmp_name1, $file_dest1);

  $photo2 = $_FILES['photo2']['name'];
  $photo2_type = $_FILES['photo2']['type'];
  $file_tmp_name2 = $_FILES['photo2']['tmp_name'];
  $file_dest2 = '../image/'.$photo2;
  move_uploaded_file($file_tmp_name2, $file_dest2);

  $photo3 = $_FILES['photo3']['name'];
  $photo3_type = $_FILES['photo3']['type'];
  $file_tmp_name3 = $_FILES['photo3']['tmp_name'];
  $file_dest3 = '../image/'.$photo3;
  move_uploaded_file($file_tmp_name3, $file_dest3);

  $theme = htmlspecialchars($_POST['theme']);

  $titre = htmlspecialchars($_POST['titre']);

  $date = date("d/m/Y")." - à - ".date("H:i:s");

  $content =htmlspecialchars($_POST['content']);

  $autre = htmlspecialchars($_POST['auteur']);;

//la requete

               try {

                     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh->beginTransaction();
                     $dbh->exec("SET CHARACTER SET utf8");
                     //$req4 = "UPDATE ps
                     //SET nom='$nom',
                     $dbh->exec("UPDATE `article` SET photoP='$photoP', photo1='$photo1', photo2='$photo2', photo3='$photo3', theme='$theme', titre='$titre', dateJ='$date', content='$content', autre='$autre' ");
                     $dbh->commit();

                     echo 'merci pour votre Article portant sur '.$theme.' avec pour titre '.$titre.' a bien été Modifié';

                   }

                   catch (Exception $e) {
                   $dbh->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT: " . $e->getMessage();
                   }
?>
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
