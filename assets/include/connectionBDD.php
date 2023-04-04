<?php

$db_user = "root";
$db_password ="";
$db_host = "localhost";
$db_name = "la_fringale_street_food";

$dsn = 'mysql:dbname='.$db_name.';host='.$db_host;

// connexion a la base de données en instanciant un objet de la classe PDO
$pdo = new PDO($dsn, $db_user, $db_password);




define("ADMIN_PASSWORD", "Damien1990");


define("GMAIL_KEY", "mettre la clef generer par gmail la fringale");
