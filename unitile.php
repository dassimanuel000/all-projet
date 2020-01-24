<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>INGENIEUR INFORMATIQUE UCAC-ICAM</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link type="text/css" rel="stylesheet" href="swiper.min.css"/>
        <link type="text/css" rel="stylesheet" href="aos.css"/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
</head>
<style>
.div-tete{
  margin: 0;
  padding: 0;
  width: 100% auto;
  height: 100% auto;
  background-color: white;
  font-family: Phetsarath OT;
  color: whitesmoke;
  display: flex;
}
.div-tete-info{
  width: 25%;
  text-align: justify;
  color: gray;
  display: inline-flex;
  height: 2.5em;
}
.div-tete-logo{
  background-color: white;
  width: 50%;
  height: 2.4em;
}
.div-tete-social{
  width: 25%;
  height: 2.5em;
  text-align: justify;
  color: gray;
  display: inline-flex;
}
.ecran{
  margin: 0;
  padding: 0;
  margin-left: -0.5%;
  width: 101%;
  height: 42em;
  animation: ecrandef 17s ease-in-out infinite;
  -o-animation: ecrandef 17s ease-in-out infinite;
  -moz-animation: ecrandef 17s ease-in-out infinite;
  -webkit-animation: ecrandef 17s ease-in-out infinite;
  background-size: cover;
  text-transform: capitalize;
  transition-property: animation;
  background-attachment: fixed;
}
@keyframes ecrandef{
  0%,100%{
      background-image: url(1.jpg);
  }
  25%{
    background-image: url(3.jpg);
  }
  50%{
    background-image: url(11.jpg);
  }
  75%{
    background-image: url(fond.jpg);
  }
}
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');
.div-contain-logo{
  background:none;
  width: 30%;
  display: flex;
  height: 10%;
}
.div-tete-logo1{
  color: white;
  position: relative;
  left: 10%;
  background-color: white;
  width: 15%;
  z-index:111;
  transform:skewX(30deg);
}
.div-tete-logo2{
  display: inline-flex;
  background-color: white;
  width: 70%;
  height: 2.5em;
}
.div-tete-logo3{
  color: white;
  position: relative;
  left: -10%;
  background-color: white;
  width: 15%;
  transform:skewX(-30deg);
}
.img-logo2{
  width: 60%;
  background-position: bottom;
  height: 100%;
}
.div-info-social{
  margin-left: auto;
  color: orange;
  text-align: center;
  font-size: 24px;
}
.div-info-social:hover{
  color: green;
  cursor: pointer;
}/*
.div-tete-social{
  width: 25%;
  height: 2em;
  text-align: justify;
  font-size: 10px;
}
.img-logo{
  width: 20%;
  height: 1.9em;
}
.text-info{
  text-align: left;
  margin-left: 5%;
  font-size: 10px;
}
.num-info{
  display: none;
}
.div-contain-logo{
  background:none;
  width: 35%;
  display: flex;
  height: 3em;
}
.div-tete-logo1{
  color: white;
  position: relative;
  left: 15%;
  background-color: white;
  width: 25%;
  transform:skewX(30deg);
}
.div-tete-logo2{
  background-color: white;
  width: 50%;
  height: 3em;
}
.div-tete-logo3{
  color: white;
  position: relative;
  left: -10%;
  background-color: white;
  width: 25%;
  transform:skewX(-30deg);
}
.div-info-social{
  margin-left: none;
  font-size: 16px;
}
.div-info-social2{;
  display: none;
}
.div-tete-button{
  display: auto;
}
.div-info-social2{;
  text-align: center;
  font-size: 18px;
  margin-left:-2%;
}*/
</style>
<?php
<!--9999999999999999999999999-->
  $requet ="INSERT INTO article(`photoP`,`photo1`,`photo2`,`photo3`,`theme`,`titre`,`dateJ`,`content`,`autre`)
        VALUES('$photoP',
               '$photo1',
               '$photo2',
               '$photo3',
               '$theme',
               '$titre',
               '$date',
               '$content',
               '$autre')";
<!--9999999999999999999999999-->

                try {
                     $dbh2->beginTransaction();
                     $dbh2->exec("SET CHARACTER SET utf8");
                     $dbh2->exec("insert into `index2` (`id`, `image_fond2`, `promo2`, `titre2`, `detail2`) values (NULL, '$image_fond2', '$promo2', '$titre2', '$detail2')");
                     $dbh2->commit();
                   }

                   catch (Exception $e) {
                   $dbh2->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 2: " . $e->getMessage();
                   }
                  try {
                     $dbh3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh3->beginTransaction();
                     $dbh3->exec("SET CHARACTER SET utf8");
                     $dbh3->exec("insert into `index3` (`id`, `image_fond3`, `promo3`, `titre3`) values (NULL, '$image_fond3', '$promo3', '$titre3')");
                     $dbh3->commit();
                   }

                   catch (Exception $e) {
                   $dbh3->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 3: " . $e->getMessage();
                   }
                   try {
                     $dbh4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh4->beginTransaction();
                     $dbh4->exec("SET CHARACTER SET utf8");
                     $dbh4->exec("insert into `index4` (`id`, `image_fond4`, `promo4`, `titre4`) values (NULL, '$image_fond4', '$promo4', '$titre4')");
                     $dbh4->commit();
                   }

                   catch (Exception $e) {
                   $dbh4->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 4: " . $e->getMessage();
                   }
                   try {
                     $dbh5->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh5->beginTransaction();
                     $dbh5->exec("SET CHARACTER SET utf8");
                     $dbh5->exec("insert into `index_projet1` (`id`, `image_projet1`, `titre_projet1`, `detail_projet1`) values (NULL, '$image_projet1', '$titre_projet1', '$detail_projet1')");
                     $dbh5->commit();
                   }

                   catch (Exception $e) {
                   $dbh5->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 5: " . $e->getMessage();
                   }
                   try {
                     $dbh6->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh6->beginTransaction();
                     $dbh6->exec("SET CHARACTER SET utf8");
                     $dbh6->exec("insert into `index_projet2` (`id`, `image_projet2`, `titre_projet2`, `detail_projet2`) values (NULL, '$image_projet2', '$titre_projet2', '$detail_projet2')");
                     $dbh6->commit();
                   }

                   catch (Exception $e) {
                   $dbh6->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 6: " . $e->getMessage();
                   }
                   try {
                     $dbh7->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh7->beginTransaction();
                     $dbh7->exec("SET CHARACTER SET utf8");
                     $dbh7->exec("insert into `index_projet3` (`id`, `image_projet3`, `titre_projet3`, `detail_projet3`) values (NULL, '$image_projet3', '$titre_projet3', '$detail_projet3')");
                     $dbh7->commit();
                   }

                   catch (Exception $e) {
                   $dbh7->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 7: " . $e->getMessage();
                   }
                   try {
                     $dbh8->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh8->beginTransaction();
                     $dbh8->exec("SET CHARACTER SET utf8");
                     $dbh8->exec("insert into `index_projet4` (`id`, `image_projet4`, `titre_projet4`, `detail_projet4`) values (NULL, '$image_projet4', '$titre_projet4', '$detail_projet4')");
                     $dbh8->commit();
                   }

                   catch (Exception $e) {
                   $dbh8->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 8: " . $e->getMessage();
                   }
                   try {
                     $dbh9->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh9->beginTransaction();
                     $dbh9->exec("SET CHARACTER SET utf8");
                     $dbh9->exec("insert into `index_projet5` (`id`, `image_projet5`, `titre_projet5`, `detail_projet5`) values (NULL, '$image_projet5', '$titre_projet5', '$detail_projet5')");
                     $dbh9->commit();
                   }

                   catch (Exception $e) {
                   $dbh9->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 9: " . $e->getMessage();
                   }
                   try {
                     $dbh10->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh10->beginTransaction();
                     $dbh10->exec("SET CHARACTER SET utf8");
                     $dbh10->exec("insert into `index_tuto1` (`id`, `image_tuto1`, `titre_tuto1`, `detail_tuto1`) values (NULL, '$image_tuto1', '$titre_tuto1', '$detail_tuto1')");
                     $dbh10->commit();
                   }

                   catch (Exception $e) {
                   $dbh10->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 10: " . $e->getMessage();
                   }
                   try {
                     $dbh11->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh11->beginTransaction();
                     $dbh11->exec("SET CHARACTER SET utf8");
                     $dbh11->exec("insert into `index_tuto2` (`id`, `image_tuto2`, `titre_tuto2`, `detail_tuto2`) values (NULL, '$image_tuto2', '$titre_tuto2', '$detail_tuto2')");
                     $dbh11->commit();
                   }

                   catch (Exception $e) {
                   $dbh11->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 11: " . $e->getMessage();
                   }
                   try {
                     $dbh12->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh12->beginTransaction();
                     $dbh12->exec("SET CHARACTER SET utf8");
                     $dbh12->exec("insert into `index_tuto3` (`id`, `image_tuto3`, `titre_tuto3`, `detail_tuto3`) values (NULL, '$image_tuto3', '$titre_tuto3', '$detail_tuto3')");
                     $dbh12->commit();
                   }

                   catch (Exception $e) {
                   $dbh12->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 12: " . $e->getMessage();
                   }
                   try {
                     $dbh13->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh13->beginTransaction();
                     $dbh13->exec("SET CHARACTER SET utf8");
                     $dbh13->exec("insert into `index_tuto4` (`id`, `image_tuto4`, `titre_tuto4`, `detail_tuto4`) values (NULL, '$image_tuto4', '$titre_tuto4', '$detail_tuto4')");
                     $dbh13->commit();
                   }

                   catch (Exception $e) {
                   $dbh13->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 13: " . $e->getMessage();
                   }
                   try {
                     $dbh14->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh14->beginTransaction();
                     $dbh14->exec("SET CHARACTER SET utf8");
                     $dbh14->exec("insert into `index_tuto5` (`id`, `image_tuto5`, `titre_tuto5`, `detail_tuto5`) values (NULL, '$image_tuto5', '$titre_tuto5', '$detail_tuto5')");
                     $dbh14->commit();
                   }

                   catch (Exception $e) {
                   $dbh14->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 14: " . $e->getMessage();
                   }
                   try {
                     $dbh15->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $dbh15->beginTransaction();
                     $dbh15->exec("SET CHARACTER SET utf8");
                     $dbh15->exec("insert into `index_tuto6` (`id`, `image_tuto6`, `titre_tuto6`, `detail_tuto6`) values (NULL, '$image_tuto6', '$titre_tuto6', '$detail_tuto6')");
                     $dbh15->commit();
                   }

                   catch (Exception $e) {
                   $dbh15->rollBack();
                   echo "Failed DANS L-ENREGISTREMENT 15: " . $e->getMessage();
                   }
                    ?>
<!----EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE--->
<div class="contain-index2">
  <div class="box">
    <div class="figure">
      <img src="cv.jpg"/>
      <div class="caption"></div>
    </div>
  </div>
</div>
<!--9999999999999999999999999-->

<br><br>

<div class="ecran">
  <br><br><br><br><br><br>
  <br><br><br>
  <div class="text-titre">
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
     <a href="index.php" class="button-menu" style="background-color:orangered;color:white;">ACCUEIL</a>
     <a href="projet.php" class="button-menu">PROJETS</a>
     <a href="vie.php" class="button-menu">VIE ASSOCIATIVE</a>
     <a href="actu.php" class="button-menu">ACTUALITES</a>
     <a href="local.php" class="button-menu">LOCALISATION</a>
  </div>
  <div class="div-recherche">
    <input class="button-recherche" type="text" id="mySearch"  placeholder="Search.." title="Type in a category">
    <span class="button-recherche-social" style="font-family:social media" onclick="myFunction()">D</span>
  </div>
</div>


<script>
function myFunction() {
  // Declare variables
  var input, filter, body, div, div1, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  body = document.getElementById("myMenu");
  div = body.getElementsByTagName("div");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < div.length; i++) {
    div1 = div[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      div[i].style.background = "orangered";
    } else {
      div[i].style.background = "red";
    }
  }
}
</script>




<br><br><br><br>
<div class="text-titre1" style="color:dimgrey">
  NOS PROJETS
</div>
<br>
<center>
  <div class="separation">

  </div>
</center>
<br><br>
                    <div class="contain-bloc">
                        <div class="bloc1">
                            <div class="img-bloc" style="background:url(Cap.PNG);background-size:cover;">

                            </div>
                            <div class="text-bloc">
                                <center>
                                <div class="propos">
                                    <br>
                                    Electronique

                                </div>
                                <br>
                                <center>
                                  <div class="separation">

                                  </div>
                                </center>
                                <div class="explication">
                                    <br>
                                    Montage Electronique
                                    <br>
                                    Groupe PROSIT
                                </div>
                                    <br>
                                </center>
                                <center>
                                    <button class="button-bloc">Plus D'informations</button>
                                </center>
                            </div>
                        </div>
                        <div class="bloc2">
                            <div class="img-bloc2" style="background:url(1.jpg);background-size:cover;">

                            </div>
                            <div class="text-bloc2">
                                <center>
                                <div class="propos">
                                    <br>
                                    Application Web
                                </div>
                                    <br>
                                    <center>
                                      <div class="separation">

                                      </div>
                                    </center>
                                <div class="explication">
                                    <br>
                                   Gestion des ecoles, Banques, Etablissements
                                    <br>
                                    Projet scientifique
                                </div>
                                </center>
                                <center>
                                    <button class="button-bloc">Plus D'informations</button>
                                </center>
                            </div>
                        </div>
                        <div class="bloc3">
                            <div class="img-bloc3" style="background:url(forum.jpeg);background-size:cover;">

                            </div>
                            <div class="text-bloc3">
                                <center>
                                <div class="propos">
                                    <br>
                                    Forum / Blogs
                                </div>
                                    <br>
                                    <center>
                                      <div class="separation">

                                      </div>
                                    </center>
                                <div class="explication">
                                    <br>
                                    Interagit avec l'utilisateur
                                    <br>
                                    Circulation les informations <br>Communication entre utilisateurs
                                </div>
                                </center>
                                <center>
                                    <button class="button-bloc">Plus D'informations</button>
                                </center>
                            </div>
                        </div>

                    </div>
                    <script type="text/javascript" language="JavaScript">

                        function function1() {
                        document.getElementById("ecran").style.background='url(11.jpg)';
                        document.getElementById("ecran").style.backgroundSize='cover';
                        }
                        function function2(){
                        document.getElementById("ecran").style.background='url(3.jpg)';
                        document.getElementById("ecran").style.backgroundSize='cover';
                        }
                        function function3(){
                        document.getElementById("ecran").style.background='url(screenshot.png)';
                        document.getElementById("ecran").style.backgroundSize='cover';
                        }
                        function function4(){
                        document.getElementById("ecran").style.background='url(UCAC-ICAM.jpg)';
                        document.getElementById("ecran").style.backgroundSize='cover';
                        }
                        function function5(){
                        document.getElementById("ecran").style.background='url(1.jpg)';
                        document.getElementById("ecran").style.backgroundSize='cover';
                        }
                    </script>
                    <div class="div-ecran-exemple" style="background-attachment:fixed;" id="ecran">
                        <center>
                      <div class="div-cercle">

                        <div class="div-cercle-animation cercle1" onclick="function1()" style="background-color:darkred;">

                        </div>
                        <div class="div-cercle-animation cercle2" onclick="function2()" style="background-color:crimson;">

                        </div>
                        <div class="div-cercle-animation cercle3" onclick="function3()" style="background-color:red;">

                        </div>
                        <div class="div-cercle-animation cercle4" onclick="function4()" style="background-color:orangered;">

                        </div>
                        <div class="div-cercle-animation cercle5" onclick="function5()" style="background-color:darkorange;">

                        </div>

                      </div>
                      </center>
                    </div>

                    <br><br><br><br>
                    <div class="text-titre1" style="color:dimgrey">
                      NOS ACTIVITES
                    </div>
                    <br>
                    <center>
                      <div class="separation">

                      </div>
                    </center>
                    <br><br>
                                        <div class="contain-bloc">
                                            <div class="bloc1">
                                                <div class="img-bloc" style="background:url(Cap.PNG);background-size:cover;">

                                                </div>
                                                <div class="text-bloc">
                                                    <center>
                                                    <div class="propos">
                                                        <br>
                                                        Olympiades

                                                    </div>
                                                    <br>
                                                    <center>
                                                      <div class="separation">

                                                      </div>
                                                    </center>
                                                    <div class="explication">
                                                        <br>
                                                        Montage Electronique
                                                        <br>
                                                        Groupe PROSIT
                                                        <br>
                                                    </div>
                                                    </center>
                                                    <center>
                                                        <button class="button-bloc">Plus D'informations</button>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="bloc2">
                                                <div class="img-bloc2" style="background:url(1.jpg);background-size:cover;">

                                                </div>
                                                <div class="text-bloc2">
                                                    <center>
                                                    <div class="propos">
                                                        <br>
                                                        Pi&egrave;ce Theatrale
                                                    </div>
                                                        <br>
                                                        <center>
                                                          <div class="separation">

                                                          </div>
                                                        </center>
                                                    <div class="explication">
                                                        <br>
                                                       Etablissements
                                                        <br>
                                                        Projet scientifique
                                                    </div>
                                                    </center>
                                                    <center>
                                                        <button class="button-bloc">Plus D'informations</button>
                                                    </center>
                                                </div>
                                            </div>
                                            <div class="bloc3">
                                                <div class="img-bloc3" style="background:url(forum.jpeg);background-size:cover;">

                                                </div>
                                                <div class="text-bloc3">
                                                    <center>
                                                    <div class="propos">
                                                        <br>
                                                        Soiree Etudiants
                                                    </div>
                                                        <br>
                                                        <center>
                                                          <div class="separation">

                                                          </div>
                                                        </center>
                                                    <div class="explication">
                                                        <br>
                                                        Interagit avec l'utilisateur
                                                        <br>
                                                        Circulation les informations
                                                    </div>
                                                    </center>
                                                    <center>
                                                        <button class="button-bloc">Plus D'informations</button>
                                                    </center>
                                                </div>
                                            </div>

                                        </div>

                                      <div class="div-ecran-promo">
                                        <div class="div-promo-text">
                                          <br><br><br><br><br><br>
                                          <h2 style="font-family:Droid Sans Fallback;">
                                            Welcome To Promotion EXARS 2024
                                          </h2>
                                          <div class="text-titre1" style="text-align:justify">
                                            Eleves ingenieurs portant de grands reves
                                          </div>
                                        </div>
                                        <div class="div-promo-image">
                                          <br><br><br>
                                          <div class="promo-image" id="image-promo">
                                            <br><br><br><br><br><br>
                                            <br><br><br><br><br>
                                              <div class="button-defilement fleche1" onclick="functionD1()">
                                                <span style="font-family:Heydings Icons;font-size:24px;">u</span>
                                              </div>
                                              <div class="button-defilement fleche2" onclick="functionD2()">
                                                <span style="font-family:Heydings Icons;font-size:24px;">d</span>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <script type="text/javascript" language="JavaScript">

                                          function functionD1() {
                                          document.getElementById("image-promo").style.background='url(11.jpg)';
                                          document.getElementById("image-promo").style.backgroundSize='670px';
                                          document.getElementById("image-promo").style.animationDuration='670ms';
                                          }
                                          function functionD2(){
                                          document.getElementById("image-promo").style.background='url(3.jpg)';
                                          document.getElementById("image-promo").style.backgroundSize='cover';
                                          document.getElementById("image-promo").style.animationDuration='670ms';
                                          }

                                      </script>
                                      <br><br><br><br>



</html>
