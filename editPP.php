<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>CPANEL</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="style1.css"/>
        <link type="text/css" rel="stylesheet" href="style2.css"/>
        <link type="text/css" rel="stylesheet" href="navigator.css"/>
        <meta charset="utf-8"/>
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
 .contain-edit{
   width: 75%;
   height: auto;
 }
 .contain-cpanel{
   margin: 0;
   padding: 0;
   margin-left: -0.5%;
   width: 101%;
   height: 42em;
   display: run-in;
 }
 .div-header-menu input{
   background: none;
   border: 0px;
 }
.bloc1, .bloc2, .bloc3{
  height: auto;
  margin-left: 5%;
  width: 30%;
}
.bloc1:hover{
  cursor:none;
}
.img-bloc{
  background-repeat: no-repeat;
}
</style>
<form enctype="multipart/form-data" method="POST" action="edit_index.php" style="width:auto;height:auto;">
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
        <input type="submit" class="lien-menu" value="SAUVEGARDER CETTE PAGE"/>
      </div>
      <div class="menu-recherche">
        <input type="text" id="" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
        <span class="button-recherche-social" style="font-family:Heydings Common Icons" onclick="myFunction()">M</span>
      </div>
    </div>
  </header>
  <div class="contain-cpanel">
    <div class="contain-cpanel-liste">
      <ul>
        <a href="editPP.php">
          <li>Modifier la premiere page</li>
        </a>
        <a href="editPA.php">
          <li>Modifier la page des articles</li>
        </a>
        <a href="editPT.php">
          <li>Modifier la page des tutoriels</li>
        </a>
        <a href="editPPro.php">
          <li>Modifier la page des projet</li>
        </a>
      </ul>
    </div>
    <div class="contain-cpanel-body">
      <br><br>
      <div class="body-titre">
        <div class="div-body-tire">
          <span style="">ARTICLES RECENTS</span>
        </div>
      </div>
      <br>
      <br>
      <div class="contain-bloc">
      <div class="bloc1">
          <div class="img-bloc" style="background:url(BLOC1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

          </div>
          <div class="text-bloc">
              <center>
              <div class="propos">
                  <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                  <input type="file" name="image_fond1" class="" required/>
              </div>
              <br>

              <div class="explication">
                <span style="font-size:14px;">Ajoutez la promo</span><br>
                <br>
                <input type="text" name="promo1" placeholder="PROMO" class="" required/>
                <br>
                <span style="font-size:14px;">Ajoutez LE TITRE</span>
                <br>
                <input type="text" name="titre1" placeholder="LE TITRE 1" class="" required/>
                <br>
                <label>Detail de l'article ici</label><br>
                <br>
                <textarea name="detail1" class="auto-style7" value=""></textarea>
              </div>
              </center>
          </div>
      </div>
      <div class="bloc2">
        <div class="img-bloc" style="background:url(BLOC2.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

        </div>
        <div class="text-bloc">
            <center>
            <div class="propos">
                <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                <br>
                <input type="file" name="image_fond2" class="" required/>
            </div>
            <br>

            <div class="explication">
              <span style="font-size:14px;">Ajoutez la promo</span><br>
              <br>
              <input type="text" name="promo2" placeholder="la promotion" class="" required/>
              <br>
              <span style="font-size:14px;">Ajoutez LE TITRE</span>
              <br>
              <input type="text" name="titre2" placeholder="LE TITRE 2" class="" required/>
              <br>
              <label>Detail de l'article ici</label><br>
              <br>
              <textarea name="detail2" class="auto-style7" value=""></textarea>
            </div>
            </center>
        </div>
      </div>
      <div class="bloc1">
          <div class="img-bloc" style="background:url(BLOC3.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

          </div>
          <div class="text-bloc">
              <center>
              <div class="propos">
                  <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                  <input type="file" name="image_fond3" class="" required/>
              </div>
              <br>

              <div class="explication">
                <span style="font-size:14px;">Ajoutez la promo</span><br>
                <br>
                <input type="text" name="promo3" placeholder="PROMO" class="" required/>
                <br>
                <span style="font-size:14px;">Ajoutez LE TITRE</span>
                <br>
                <input type="text" name="titre3" placeholder="LE TITRE 3" class="" required/>
              </div>
              </center>
          </div>
      </div>
    </div>
    <br><br><br>
      <div class="contain-bloc">
      <div class="bloc1">
          <div class="img-bloc" style="background:url(BLOC1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

          </div>
          <div class="text-bloc">
              <center>
              <div class="propos">
                  <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                  <input type="file" name="image_fond4" class="" required/>
              </div>
              <br>

              <div class="explication">
                <span style="font-size:14px;">Ajoutez la promo</span><br>
                <br>
                <input type="text" name="promo4" placeholder="PROMO" class="" required/>
                <br>
                <span style="font-size:14px;">Ajoutez LE TITRE</span>
                <br>
                <input type="text" name="titre4" placeholder="LE TITRE 4" class="" required/>
              </div>
              </center>
          </div>
      </div>
</div>
<br><br><br>
<div class="body-titre">
<div class="div-body-tire">
<span style="">NOS PROJETS</span>
</div>
</div>
<br><br>
<div class="contain-bloc">
            <div class="bloc1">
                <div class="img-bloc" style="background:url(PROJET1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                </div>
                <div class="text-bloc">
                    <center>
                    <div class="propos">
                        <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                        <input type="file" name="image_projet1" class="" required/>
                    </div>
                    <br>
                    <br>

                    <div class="explication">
                      <span style="font-size:14px;">Ajoutez LE TITRE DU PROJET</span>
                      <br>
                      <input type="text" name="titre_projet1" placeholder="LE TITRE PROJET 1" class="" required/>
                      <label>Detail de l'article ici</label><br>
                      <br>
                      <textarea name="detail_projet1" class="auto-style7" value=""></textarea>
                    </div>
                    </center>
                </div>
            </div>
            <div class="bloc2">
              <div class="img-bloc" style="background:url(PROJET1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

              </div>
              <div class="text-bloc">
                  <center>
                  <div class="propos">
                      <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                      <input type="file" name="image_projet2" class="" required/>
                  </div>
                  <br>
                  <br>

                  <div class="explication">
                    <span style="font-size:14px;">Ajoutez LE TITRE DU PROJET</span>
                    <input type="text" name="titre_projet2" placeholder="LE TITRE PROJET 2" class="" required/>
                    <br>
                    <br>
                    <label>Detail de l'article ici</label><br>
                    <textarea name="detail_projet2" class="auto-style7" value=""></textarea>
                    <br>
                    <br>
                  </div>
                  </center>
              </div>
            </div>
            <div class="bloc3">
              <div class="img-bloc" style="background:url(PROJET1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

              </div>
              <div class="text-bloc">
                  <center>
                  <div class="propos">
                      <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                      <input type="file" name="image_projet3" class="" required/>
                  </div>
                  <br>

                  <br>
                  <div class="explication">
                    <span style="font-size:14px;">Ajoutez LE TITRE DU PROJET</span>
                    <input type="text" name="titre_projet3" placeholder="LE TITRE PROJET 3" class="" required/>
                    <br>
                    <br>
                    <label>Detail de l'article ici</label><br>
                    <textarea name="detail_projet3" class="auto-style7" value=""></textarea>
                    <br>
                  </div>
                  </center>
              </div>
      </div>
</div>
<br><br><br>
<div class="contain-bloc">
                  <div class="bloc1">
                      <div class="img-bloc" style="background:url(PROJET1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                      </div>
                      <div class="text-bloc">
                          <center>
                          <div class="propos">
                              <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                              <input type="file" name="image_projet4" class="" required/>
                          </div>
                          <br>
                          <div class="explication">
                            <span style="font-size:14px;">Ajoutez LE TITRE DU PROJET</span>
                            <input type="text" name="titre_projet4" placeholder="LE TITRE PROJET 4" class="" required/>
                            <br>
                            <br>
                            <label>Detail de l'article ici</label><br>
                            <textarea name="detail_projet4" class="auto-style7" value=""></textarea>
                            <br>
                          </div>
                          </center>
                      </div>
                  </div>
                  <div class="bloc2">
                    <div class="img-bloc" style="background:url(PROJET1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                    </div>
                    <div class="text-bloc">
                        <center>
                        <div class="propos">
                            <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                            <input type="file" name="image_projet5" class="" required/>
                        </div>
                        <br>

                        <div class="explication">
                          <span style="font-size:14px;">Ajoutez LE TITRE DU PROJET</span><br>
                          <input type="text" name="titre_projet5" placeholder="LE TITRE PROJET 5" class="" required/>
                          <br>
                          <br>
                          <label>Detail de l'article ici</label><br>
                          <textarea name="detail_projet5" class="auto-style7" value=""></textarea>
                          <br>
                        </div>
                        </center>
                    </div>
                  </div>
      </div>
            <br><br>
                  <div class="body-titre">
                    <div class="div-body-tire">
                      <span style="">NOS TUTORIELS</span>
                    </div>
                  </div>
                  <br><br>
                  <div class="contain-bloc">
                      <div class="bloc1">
                          <div class="img-bloc" style="background:url(TUTO1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                          </div>
                          <div class="text-bloc">
                              <center>
                              <div class="propos">
                                  <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                                  <input type="file" name="image_tuto1" class="" required/>
                              </div>
                              <br>
                              <div class="explication">
                                <span style="font-size:14px;">Ajoutez LE TITRE DU TUTORIEL</span>
                                <input type="text" name="titre_tuto1" placeholder="LE TITRE TUTORIEL 1" class="" required/>
                                <br>
                                <br>
                                <label>Detail de l'article ici</label><br>
                                <textarea name="detail_tuto1" class="auto-style7" value=""></textarea>
                                <br>
                              </div>
                              </center>
                          </div>
                      </div>
                      <div class="bloc2">
                        <div class="img-bloc" style="background:url(TUTO1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                        </div>
                        <div class="text-bloc">
                            <center>
                            <div class="propos">
                                <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                                <input type="file" name="image_tuto2" class="" required/>
                            </div>
                            <br>

                            <div class="explication">
                              <span style="font-size:14px;">Ajoutez LE TITRE DU TUTORIEL</span><br>
                              <input type="text" name="titre_tuto2" placeholder="LE TITRE TUTORIEL 2" class="" required/>
                              <br>
                              <br>
                              <label>Detail de l'article ici</label><br>
                              <textarea name="detail_tuto2" class="auto-style7" value=""></textarea>
                              <br>
                            </div>
                            </center>
                        </div>
                      </div>

                      <div class="bloc2">
                        <div class="img-bloc" style="background:url(TUTO1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                        </div>
                        <div class="text-bloc">
                            <center>
                            <div class="propos">
                                <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                                <input type="file" name="image_tuto3" class="" required/>
                            </div>
                            <br>

                            <div class="explication">
                              <span style="font-size:14px;">Ajoutez LE TITRE DU TUTORIEL</span><br>
                              <input type="text" name="titre_tuto3" placeholder="LE TITRE TUTORIEL 3" class="" required/>
                              <br>
                              <br>
                              <label>Detail de l'article ici</label><br>
                              <textarea name="detail_tuto3" class="auto-style7" value=""></textarea>
                              <br>
                            </div>
                            </center>
                        </div>
                      </div>
                        </div>
                  <br><br>
                        <div class="contain-bloc">
                          <div class="bloc1">
                              <div class="img-bloc" style="background:url(TUTO1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                              </div>
                              <div class="text-bloc">
                                  <center>
                                  <div class="propos">
                                      <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                                      <input type="file" name="image_tuto4" class="" required/>
                                  </div>
                                  <br>
                                  <div class="explication">
                                    <span style="font-size:14px;">Ajoutez LE TITRE DU TUTORIEL</span>
                                    <input type="text" name="titre_tuto4" placeholder="LE TITRE TUTORIEL 4" class="" required/>
                                    <br>
                                    <br>
                                    <label>Detail de l'article ici</label><br>
                                    <textarea name="detail_tuto4" class="auto-style7" value=""></textarea>
                                    <br>
                                  </div>
                                  </center>
                              </div>
                          </div>
                          <div class="bloc2">
                            <div class="img-bloc" style="background:url(TUTO1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                            </div>
                            <div class="text-bloc">
                                <center>
                                <div class="propos">
                                    <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                                    <input type="file" name="image_tuto5" class="" required/>
                                </div>
                                <br>

                                <div class="explication">
                                  <span style="font-size:14px;">Ajoutez LE TITRE DU TUTORIEL</span><br>
                                  <input type="text" name="titre_tuto5" placeholder="LE TITRE TUTORIEL 5" class="" required/>
                                  <br>
                                  <br>
                                  <label>Detail de l'article ici</label><br>
                                  <textarea name="detail_tuto5" class="auto-style7" value=""></textarea>
                                  <br>
                                </div>
                                </center>
                            </div>
                          </div>

                              <div class="bloc2">
                                <div class="img-bloc" style="background:url(TUTO1.png);background-repeat: no-repeat;background-size:contain;background-position:center;">

                                </div>
                                <div class="text-bloc">
                                    <center>
                                    <div class="propos">
                                        <span style="font-size:14px;">Ajoutez une image de fond</span><br>
                                        <input type="file" name="image_tuto6" class="" required/>
                                    </div>
                                    <br>

                                    <div class="explication">
                                      <span style="font-size:14px;">Ajoutez LE TITRE DU TUTORIEL</span><br>
                                      <input type="text" name="titre_tuto6" placeholder="LE TITRE TUTORIEL 6" class="" required/>
                                      <br>
                                      <br>
                                      <label>Detail de l'article ici</label><br>
                                      <textarea name="detail_tuto6" class="auto-style7" value=""></textarea>
                                      <br>
                                    </div>
                                    </center>
                                </div>
                              </div>
                  </div>
    </div>
  </div>

</form>
</html>
