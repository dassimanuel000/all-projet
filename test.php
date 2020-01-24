<html lang="fr">
<html dir="ltr" lang="fr" xml:lang="fr">
<head>
        <title>AJOUT REUSSI</title>
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link type="text/css" rel="stylesheet" href="responsive.css"/>
        <link type=""/>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>

<?php

  include 'connexion.php';

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $lieu = $_POST['lieu'];
    $nomphoto = $_FILES['photo']['name'];
    $file_tmp_name=$_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name,"./photo/$nomphoto");
    $pere = $_POST['pere'];
    $telephone = $_POST['telephone'];
    $inscription = $_POST['inscription'];
    $tranche1 = $_POST['tranche1'];
    $tranche2 = $_POST['tranche2'];
    $autre = $_POST['autre'];
    //  $autre2 = new DateTime();

    $autre2 = date("d/m/Y").' - '.date("H:i:s") ;

    $req ="INSERT INTO ps(nom,prenom,age,lieu,photo,pere,telephone,inscription,tranche1,tranche2,autre,autre2)
            VALUES('$nom',
                   '$prenom',
                   '$age',
                   '$lieu',
                   '$nomphoto',
                   '$pere',
                   '$telephone',
                   '$inscription',
                   '$tranche1',
                   '$tranche2',
                   '$autre',
                   '$autre2')";
    $res = $mysqli->query($req);

    if ($res == true){
  echo '<FONT SIZE=13 FACE=Arial>'."L'eleve ".'<br>'.'</FONT>'.'<FONT SIZE=19 FACE=Arial>'.$nom." - ".$prenom.'</FONT>'.'<br>'.'<FONT SIZE=14 COLOR=green FACE=Arial>'."EST BIEN ENREGISTRE".'</font>';
  echo "<br>";?>
  <div class="contain-classe">
    <a href="ps.php">
      <button class=button-menu-left>LISTE DES ELEVES</button>
    </a>
<?php
}else{
  echo '<font color=red>'."ERREUR LORS DE L'ENREGISTREMENT".'</font>';
}

?>
