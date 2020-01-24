
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
header('Content-Type: text/html; charset=utf-8');
 ?>


<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
        <title>ARTICLE AJOUTEE</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="navigator.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
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
  echo "Connecté\n";
}catch (Exception $e){
  die("Impossible de se connecter A LA BDD: " . $e->getMessage());
}


  $photoP=$_FILES['photoP']['name'];
  $photoP_type=$_FILES['photoP']['type'];
  $file_tmp_nameP = $_FILES['photoP']['tmp_name'];
  $file_destP = 'image/'.$photoP;
  move_uploaded_file($file_tmp_nameP, $file_destP);

  $photo1 = $_FILES['photo1']['name'];
  $photo1_type = $_FILES['photo1']['type'];
  $file_tmp_name1 = $_FILES['photo1']['tmp_name'];
  $file_dest1 = 'image/'.$photo1;
  move_uploaded_file($file_tmp_name1, $file_dest1);

  $photo2 = $_FILES['photo2']['name'];
  $photo2_type = $_FILES['photo2']['type'];
  $file_tmp_name2 = $_FILES['photo2']['tmp_name'];
  $file_dest2 = 'image/'.$photo2;
  move_uploaded_file($file_tmp_name2, $file_dest2);

  $photo3 = $_FILES['photo3']['name'];
  $photo3_type = $_FILES['photo3']['type'];
  $file_tmp_name3 = $_FILES['photo3']['tmp_name'];
  $file_dest3 = 'image/'.$photo3;
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
                     $dbh->exec("insert into `article` (`id`, `photoP`, `photo1`, `photo2`, `photo3`, `theme`, `titre`, `dateJ`, `content`, `autre`) values (NULL, '$photoP', '$photo1', '$photo2', '$photo3', '$theme', '$titre', '$date', '$content', '$autre')");
                     $dbh->commit();

                     echo '<button style="background-color:lime;border:0px;">merci pour votre Article portant sur '.$theme.' avec pour titre '.$titre.' a bien été envoyé</button>';

                   }

                   catch (Exception $e) {
                   $dbh->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT: " . $e->getMessage();
                   }
?>
