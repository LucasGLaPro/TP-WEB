<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exox5</title>
</head>
<body>
<form action="" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" name="Valider" />
    <button type="submit" name="Reset">Reset</button>
</p>
<?php

if(isset($_POST["Valider"])){
    $_SESSION["prenom"] = $_POST["prenom"];
    }
    if(isset($_SESSION["prenom"])) {
    echo"<div class='style1'> ton nom est :".$_SESSION["prenom"]."</div>";
    } 
    else
        echo"ya rien";          
if(isset($_POST["Reset"])) {
    session_destroy();
} 
  highlight_file((__FILE__))
?>

</form>
</body>
</html>
            