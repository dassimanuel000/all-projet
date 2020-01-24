<!DOCTYPE html>
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>SCOLARITE GSB LES POISSONS</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link href="http://fonts.googleapis.com/css?family=Fenix" rel="stylesheet" type="text/css">
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>

<script type="text/javascript">
  function confirmat() {
      var mdp = prompt("Entre le mot de passe");
    if (mdp == 1) {
      alert ('Bonjour Madame');
    }else{
      mdp = prompt("Entre le bon mot de passe");
      if (mdp == 1) {
        alert ('Bonjour Madame');
      }else {
          document.location.href="index.php";
      }

    //else if{
      //alert ("AUREVOIR");
      //document.location.href="index.php";
    }
  }

</script>

<?php

  include 'header.php';

 ?>
<body onload="setTimeout('confirmat()', 300)">
  <div class="contain-scolarite">
    <div class="text-classe">
      <h1 style="margin-left:20%;">MATERNELLE</h1>
    </div>
    <div class="div-index">
       <div class="contain-header">
         <a href="ps/ps.php" class="bloc-div-header bloc1">
           <div class="div-header">
             <span class="text-div-header">PETITE SECTION</span>
           </div>
         </a>
         <a href="" class="bloc-div-header bloc2">
           <div class="div-header">
             <span class="text-div-header">MOYENNE SECTION</span>
           </div>
         </a>
         <a href="" class="bloc-div-header bloc3">
           <div class="div-header">
             <span class="text-div-header">GRANDE SECTION</span>
           </div>
         </a>
       </div>
     </div>
     <div class="contain-scolarite">
       <div class="text-classe">
         <h1 style="margin-left:20%;">NURSERY</h1>
       </div>
       <div class="div-index">
          <div class="contain-header">
            <a href=href="ps.php" class="bloc-div-header bloc1">
              <div class="div-header">
                <span class="text-div-header">NURSERY ONE - 1</span>
              </div>
            </a>
            <a href="" class="bloc-div-header bloc2">
              <div class="div-header">
                <span class="text-div-header">NURSERY TWO - 2</span>
              </div>
            </a>
            <a href="" class="bloc-div-header bloc3">
              <div class="div-header">
                <span class="text-div-header">NURSERY TWO - 3</span>
              </div>
            </a>
          </div>
        </div>
            <div class="text-classe">
              <h1 style="margin-left:20%;">PRIMAIRE FRANCOPHONE</h1>
            </div>
              <div class="contain-div-classe">

                  <a href="" style="" class="lien-classe">
                    <div class="div-classe" style="border: 3px solid green;color:black;">
                      SIL
                    </div>
                  </a>

                <br>

                  <a href="" style="text-decoration:none;" class="lien-classe">
                    <div class="div-classe" style="border: 3px solid dodgerblue;color:black;">
                      CP
                    </div>
                  </a>

                <br>

                  <a href="" style="text-decoration:none;" class="lien-classe">
                    <div class="div-classe" style="border: 3px solid crimson;color:black;">
                      CE1
                    </div>
                  </a>
                  <br>
                </div>
                <div class="contain-div-classe">
                    <a href="" style="text-decoration:none;" class="lien-classe">
                      <div class="div-classe" style="border: 3px solid gold;color:black;">
                        CE1
                      </div>
                    </a><br>

                      <a href="" style="text-decoration:none;" class="lien-classe">
                        <div class="div-classe" style="border: 3px solid turquoise;color:black;">
                          CE2
                        </div>
                      </a><br>

                        <a href="" style="text-decoration:none;" class="lien-classe">
                          <div class="div-classe" style="border: 3px solid dodgerblue;color:black;">
                            CM1
                          </div>
                        </a>
                        <br>
                      </div>
                      <div class="contain-div-classe">
                          <a href="" style="text-decoration:none;" class="lien-classe">
                            <div class="div-classe" style="border: 3px solid fuchsia;color:black;">
                              CM2
                            </div>
                          </a>
                        </div>
  </div>
</body>
