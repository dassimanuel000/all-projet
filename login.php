<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>CONNEXION BLOG UCAC-ICAM</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="swiper1.min.css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no"/>
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
</head>
<header class="header-menu">
  <div class="contain-header">
    <div class="contain-header-logo">
      <?php echo "<img src='UCAC-ICAM.jpg' class='header-logo'/>"; ?>
    </div>
  </div>
  <div class="contain-header-menu">
    <div class="div-header-menu">
      <a href="" class="lien-menu"><span class="lien-menu-social">H</span></a>
      <a href="" class="lien-menu">ARTICLES</a>
      <a href="" class="lien-menu">TUTORIELS</a>
      <a href="" class="lien-menu">LOCALISATION</a>
      <a href="" class="lien-menu">PROJETS</a>
      <a href="login.php"  style="background:orangered;" class="lien-menu">CONNEXION</a>
    </div>
    <div class="menu-recherche">
      <input type="text" id="" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
      <span class="button-recherche-social" style="font-family:Heydings Common Icons" onclick="myFunction()">M</span>
    </div>
  </div>
</header>
<br>
<body>
  <div class="body-titre">
    <div class="div-body-tire">
      <span style="">CONNEXION AU CPANEL</span>
    </div>
  </div>
  <div class="contain-login">
    <form action="connexion.php" enctype="multipart/form-data" method="POST" style="height:100%;">
    <div class="div-login">
      <div class="div-input-login" style="background:#323232;width:100%;border-radius:15px 15px 0px 0px;border-bottom: 5px solid orangered;">
        <br>
        <span>AJOUTEZ DES INFORMATIONS</span>
      </div>
      <br>
        <div class="div-input-login">
          <label>Noms</label>
          <input type="text" name="nom" placeholder="   Ajoutez vos Noms et Prenoms" value="" required/>
        </div>
        <br><br>
        <div class="div-input-login">
          <label>Email</label>
          <input type="text" name="mail" placeholder="  Ajoutez votre Adresse mail" value="" required/>
        </div>
        <br><br>
        <div class="div-input-login">
          <label>Mot de Passe</label>
          <input type="password" id="password" name="mdp" placeholder="   Ajoutez le Mot de passe" value="" required/>
          <label for="checkbox">
          <label>Afficher le mot de passe</label>
          <input type="checkbox" id="checkbox">
          
          </label>
     
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script type="text/javascript">
              $(document).ready(function() {
                  var checkbox = $("#checkbox");
                  var password = $("#password");
                  checkbox.click(function() {
                      if(checkbox.prop("checked")) {
                          password.attr("type", "text");
                      } else {
                          password.attr("type", "password");
                      }
                  });
              });
          </script>
        </div>
        <br><br>
        <br>
        <div class="div-input-login">
          <center>
            <input class="button-submit" type="submit" value="VALIDER" required/>
          </center>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
