<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
header('Content-Type: text/html; charset=utf-8');
 ?>

<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>AJOUER UN ARTICLE | TUTORIELS</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
        <link type="text/css" rel="stylesheet" href="navigator.css"/>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
        <meta charset="utf-8"/>
        <meta charset="UTF-8"/>
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
          <a href="" class="active">
            <li>Ajoutez un article</li>
          </a>
          <a href="">
            <li>Ajoutez un tutoriel</li>
          </a>
          <a href="">
            <li>Ajoutez un projet</li>
          </a>
        </ul>
      </div>

      <div class="contain-cpanel-body">
        <br><br>
        <div class="div-add-article">
          <div class="contain-form-add">
            <form action="add.php" enctype="multipart/form-data" method="POST" style="width:100%;height:auto;" accept-charset="utf-8">
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
        </div>
      </div>
    </div>
  </body>
</html>
