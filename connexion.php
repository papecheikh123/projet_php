<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage</title>
<style>
    table{
        border:2px solid black;
    }
    td ,th{
        border :1px solid black;
        border-collapse: collapse;
    }
</style>



</head>
<body>
    
</body>
</html>



<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$sql = "mysql:host=localhost;dbname= magazin;";


//On essaie de se connecter
try{
    $conn = new PDO("mysql:host=localhost;dbname=magazin", $username,"" );
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
}

/*On capture les exceptions si une exception est lancée et on affiche
 *les informations relatives à celle-ci*/
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}
?> 