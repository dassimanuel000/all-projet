<?php

try{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=BLOG;charset=utf8', 'root', '');
}catch(Exception $e){
    // En cas d'erreur, on affiche un message et on arrête tout
      die('Erreur : '.$e->getMessage());
}
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $login = $bdd->query('SELECT * FROM user');

    while ($donnees = $login->fetch()) {

      if (($donnees['mail'] == $mail) OR ($donnees['nom'] == $nom) OR ($donnees['mdp'] == $mdp)) {
      header("location:cpanel/index.php");
      exit;
      }
    }
    if ($_POST['mdp'] == 1) {
        $mdp = $_POST['mdp'];
        header("location:cpanel.php");
        $requete ="INSERT INTO user(`nom`,`mail`,`mdp`)
                    VALUES('$nom',
                           '$mail',
                           '$mdp')";
            $resultat = $bdd->query($requete);
            echo "ok";
      }else {
      header("location:index.php");
      }

    $reponse->closeCursor();
 ?>
