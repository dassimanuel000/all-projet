<?php

require_once 'connexionbd.php';

$id = $_GET['id'];

$req2 = "DELETE FROM article WHERE (id=$id)";

$resultat = $mysqli->query($req2) or die("probleme de suppression");

header("location:index.php");


 ?>