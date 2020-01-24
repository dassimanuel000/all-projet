<?php
$mysqli = new mysqli("localhost", "root", "", "BLOG");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT)") ||
    !$mysqli->query("INSERT INTO test(id) VALUES (1)")) {
    echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}
?>
