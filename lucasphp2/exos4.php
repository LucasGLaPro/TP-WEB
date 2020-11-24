<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1 align="center">Exercice 4</h1>
    <?php
    include 'fonctions.php';

$yep = formu();

 if( $yep === "ok"){
    ?><a href="surprise.php">cliquez sur le lien</a><?php

 }else{
    echo "";
 }

    ?>
</body>
</html>  