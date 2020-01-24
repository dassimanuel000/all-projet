
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
header('Content-Type: text/html; charset=utf-8');
 ?>


<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
        <title>PAGE AJOUTEE</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
        <link type="text/css" rel="stylesheet" href="navigator.css"/>
        <meta charset="UTF-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="swiper1.min.css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
</head>

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


<?php

try {
  $dbh = new PDO('mysql:host=localhost;dbname=BLOG', 'root', '');
  array(PDO::ATTR_PERSISTENT => true);
  echo "Connecté<BR>";
}catch (Exception $e){
  die("Impossible de se connecter A LA BDD: " . $e->getMessage());
}


  $image_fond1=$_FILES['image_fond1']['name'];
  $image_fond1_type=$_FILES['image_fond1']['type'];
  $file_tmp_name1 = $_FILES['image_fond1']['tmp_name'];
  $file_dest1 = 'image/'.$image_fond1;
  move_uploaded_file($file_tmp_name1, $file_dest1);

  $promo1 = htmlspecialchars($_POST['promo1']);
  $titre1 = htmlspecialchars($_POST['titre1']);
  $detail1 = htmlspecialchars($_POST['detail1']);

  $image_fond2=$_FILES['image_fond2']['name'];
  $image_fond2_type=$_FILES['image_fond2']['type'];
  $file_tmp_name2 = $_FILES['image_fond2']['tmp_name'];
  $file_dest2 = 'image/'.$image_fond2;
  move_uploaded_file($file_tmp_name2, $file_dest2);

  $promo2 = htmlspecialchars($_POST['promo2']);
  $titre2 = htmlspecialchars($_POST['titre2']);
  $detail2 = htmlspecialchars($_POST['detail2']);

  $image_fond3=$_FILES['image_fond3']['name'];
  $image_fond3_type=$_FILES['image_fond3']['type'];
  $file_tmp_name3 = $_FILES['image_fond3']['tmp_name'];
  $file_dest3 = 'image/'.$image_fond2;
  move_uploaded_file($file_tmp_name3, $file_dest3);

  $promo3 = htmlspecialchars($_POST['promo3']);
  $titre3 = htmlspecialchars($_POST['titre3']);

  $image_fond4=$_FILES['image_fond4']['name'];
  $image_fond4_type=$_FILES['image_fond4']['type'];
  $file_tmp_name4 = $_FILES['image_fond4']['tmp_name'];
  $file_dest4 = 'image/'.$image_fond4;
  move_uploaded_file($file_tmp_name4, $file_dest4);

  $promo4 = htmlspecialchars($_POST['promo4']);
  $titre4 = htmlspecialchars($_POST['titre4']);

  $image_projet1=$_FILES['image_projet1']['name'];
  $image_projet1_type=$_FILES['image_projet1']['type'];
  $file_tmp_name5 = $_FILES['image_projet1']['tmp_name'];
  $file_dest5 = 'image/'.$image_projet1;
  move_uploaded_file($file_tmp_name5, $file_dest5);

  $titre_projet1 = htmlspecialchars($_POST['titre_projet1']);
  $detail_projet1 = htmlspecialchars($_POST['detail_projet1']);

  $image_projet2=$_FILES['image_projet2']['name'];
  $image_projet2_type=$_FILES['image_projet2']['type'];
  $file_tmp_name6 = $_FILES['image_projet2']['tmp_name'];
  $file_dest6 = 'image/'.$image_projet2;
  move_uploaded_file($file_tmp_name6, $file_dest6);

  $titre_projet2 = htmlspecialchars($_POST['titre_projet2']);
  $detail_projet2 = htmlspecialchars($_POST['detail_projet2']);

  $image_projet3=$_FILES['image_projet3']['name'];
  $image_projet3_type=$_FILES['image_projet3']['type'];
  $file_tmp_name7 = $_FILES['image_projet3']['tmp_name'];
  $file_dest7 = 'image/'.$image_projet3;
  move_uploaded_file($file_tmp_name7, $file_dest7);

  $titre_projet3 = htmlspecialchars($_POST['titre_projet3']);
  $detail_projet3 = htmlspecialchars($_POST['detail_projet3']);

  $image_projet4=$_FILES['image_projet4']['name'];
  $image_projet4_type=$_FILES['image_projet4']['type'];
  $file_tmp_name8 = $_FILES['image_projet4']['tmp_name'];
  $file_dest8 = 'image/'.$image_projet4;
  move_uploaded_file($file_tmp_name8, $file_dest8);

  $titre_projet4 = htmlspecialchars($_POST['titre_projet4']);
  $detail_projet4 = htmlspecialchars($_POST['detail_projet4']);

  $image_projet5=$_FILES['image_projet5']['name'];
  $image_projet5_type=$_FILES['image_projet5']['type'];
  $file_tmp_name9 = $_FILES['image_projet5']['tmp_name'];
  $file_dest9 = 'image/'.$image_projet5;
  move_uploaded_file($file_tmp_name9, $file_dest9);

  $titre_projet5 = htmlspecialchars($_POST['titre_projet5']);
  $detail_projet5 = htmlspecialchars($_POST['detail_projet5']);


    $image_tuto1=$_FILES['image_tuto1']['name'];
    $image_tuto1_type=$_FILES['image_tuto1']['type'];
    $file_tmp_name10 = $_FILES['image_tuto1']['tmp_name'];
    $file_dest10 = 'image/'.$image_tuto1;
    move_uploaded_file($file_tmp_name10, $file_dest10);

    $titre_tuto1 = htmlspecialchars($_POST['titre_tuto1']);
    $detail_tuto1 = htmlspecialchars($_POST['detail_tuto1']);

  $image_tuto2=$_FILES['image_tuto2']['name'];
  $image_tuto2_type=$_FILES['image_tuto2']['type'];
  $file_tmp_name11 = $_FILES['image_tuto2']['tmp_name'];
  $file_dest11 = 'image/'.$image_tuto2;
  move_uploaded_file($file_tmp_name11, $file_dest11);

  $titre_tuto2 = htmlspecialchars($_POST['titre_tuto2']);
  $detail_tuto2 = htmlspecialchars($_POST['detail_tuto2']);

  $image_tuto3=$_FILES['image_tuto3']['name'];
  $image_tuto3_type=$_FILES['image_tuto3']['type'];
  $file_tmp_name11 = $_FILES['image_tuto3']['tmp_name'];
  $file_dest11 = 'image/'.$image_tuto3;
  move_uploaded_file($file_tmp_name11, $file_dest11);

  $titre_tuto3 = htmlspecialchars($_POST['titre_tuto3']);
  $detail_tuto3 = htmlspecialchars($_POST['detail_tuto3']);

  $image_tuto4=$_FILES['image_tuto4']['name'];
  $image_tuto4_type=$_FILES['image_tuto4']['type'];
  $file_tmp_name12 = $_FILES['image_tuto4']['tmp_name'];
  $file_dest12 = 'image/'.$image_tuto4;
  move_uploaded_file($file_tmp_name12, $file_dest12);

  $titre_tuto4 = htmlspecialchars($_POST['titre_tuto4']);
  $detail_tuto4 = htmlspecialchars($_POST['detail_tuto4']);

  $image_tuto5=$_FILES['image_tuto5']['name'];
  $image_tuto5_type=$_FILES['image_tuto5']['type'];
  $file_tmp_name13 = $_FILES['image_tuto5']['tmp_name'];
  $file_dest13 = 'image/'.$image_tuto5;
  move_uploaded_file($file_tmp_name13, $file_dest13);

  $titre_tuto5 = htmlspecialchars($_POST['titre_tuto5']);
  $detail_tuto5 = htmlspecialchars($_POST['detail_tuto5']);

  $image_tuto6=$_FILES['image_tuto6']['name'];
  $image_tuto6_type=$_FILES['image_tuto6']['type'];
  $file_tmp_name14 = $_FILES['image_tuto6']['tmp_name'];
  $file_dest14 = 'image/'.$image_tuto6;
  move_uploaded_file($file_tmp_name14, $file_dest14);

  $titre_tuto6 = htmlspecialchars($_POST['titre_tuto6']);
  $detail_tuto6 = htmlspecialchars($_POST['detail_tuto6']);


//la requete

               try {

                     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh->beginTransaction();
                     $dbh->exec("SET CHARACTER SET utf8");

                     // On prépare la requête
                     $requete = $dbh->prepare("update `index1` set image_fond1='$image_fond1', promo1='$promo1', titre1='$titre1', detail1='$detail1'");
                     $requete->execute();

                     $requete1 = $dbh->prepare("update `index2` set image_fond2='$image_fond2', promo2='$promo2', titre2='$promo2', detail2='$detail2'");
                     $requete1->execute();

                     $requete2 = $dbh->prepare("update `index3` set image_fond3='$image_fond3', promo3='$promo3', titre3='$titre3'");
                     $requete2->execute();

                     $requete3 = $dbh->prepare("update `index4` set image_fond4='$image_fond4', promo4='$promo4', titre4='$titre4'");
                     $requete3->execute();

                     $requete4 = $dbh->prepare("update `index_projet1` set image_projet1='$image_projet1', titre_projet1='$titre_projet1', detail_projet1='$detail_projet1'");
                     $requete4->execute();

                     $requete5 = $dbh->prepare("update `index_projet2` set image_projet2='$image_projet2', titre_projet2='$titre_projet2', detail_projet2='$detail_projet2'");
                     $requete5->execute();

                     $requete6 = $dbh->prepare("update `index_projet3` set image_projet3='$image_projet3', titre_projet3='$titre_projet3', detail_projet3='$detail_projet3'");
                     $requete6->execute();

                     $requete7 = $dbh->prepare("update `index_projet4` set image_projet4='$image_projet4', titre_projet4='$titre_projet4', detail_projet4='$detail_projet4'");
                     $requete7->execute();

                     $requete8 = $dbh->prepare("update `index_projet5` set image_projet5='$image_projet5', titre_projet5='$titre_projet5', detail_projet5='$detail_projet5'");
                     $requete8->execute();

                     $requete9 = $dbh->prepare("update `index_tuto1` set image_tuto1='$image_tuto1', titre_tuto1='$titre_tuto1', detail_tuto1='$detail_tuto1'");
                     $requete9->execute();

                     $requete10 = $dbh->prepare("update `index_tuto2` set image_tuto2='$image_tuto2', titre_tuto2='$titre_tuto2', detail_tuto2='$detail_tuto2'");
                     $requete10->execute();

                     $requete11 = $dbh->prepare("update `index_tuto3` set image_tuto3='$image_tuto3', titre_tuto3='$titre_tuto3', detail_tuto3='$detail_tuto3'");
                     $requete11->execute();

                     $requete12 = $dbh->prepare("update `index_tuto4` set image_tuto4='$image_tuto4', titre_tuto4='$titre_tuto4', detail_tuto4='$detail_tuto4'");
                     $requete12->execute();

                     $requete13 = $dbh->prepare("update `index_tuto5` set image_tuto5='$image_tuto5', titre_tuto5='$titre_tuto5', detail_tuto5='$detail_tuto5'");
                     $requete13->execute();

                     $requete14 = $dbh->prepare("update `index_tuto6` set image_tuto6='$image_tuto6', titre_tuto6='$titre_tuto6', detail_tuto6='$detail_tuto6'");
                     $requete14->execute();

                     $dbh->commit();

                }

                catch (Exception $e) {
                $dbh->rollBack();
                echo "Failed DANS L-ENREGISTREMENT 1: " . $e->getMessage();
                }

                     echo 'Merci pour votre Modification portant sur la premiere page Ils ont bien été envoyé';

?>
