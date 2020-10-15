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

<?php
if(isset($_SESSION["co"]) && $_SESSION["co"]){
    echo"<div class='style1'> Bienvenue ". $_SESSION["prenom"]."</div>";
?>
<form action="" method="post">
<p>
 <button type="submit" name="deco">Deconnexion</button> 
</p>
<?php 
if(isset($_POST["deco"])) {
    session_destroy();
    $_SESSION["co"] = false;
    header("Refresh:0");
}   
} else { ?>
    <form action="" method="post">
<p>
    Login:<input type="text" name="prenom" />
    Mot de passe:<input type="text" name="mdp" />
    <input type="submit" name="Valider" />
    <button type="submit" name="Reset">Reset</button>
</p>
<?php
$_SESSION["co"] = false;
if(isset($_POST["Valider"])){
    $_SESSION["prenom"] = $_POST["prenom"];

    }
    if(isset($_SESSION["prenom"])) {

        if($_SESSION["prenom"] == "julien" ){
            $_SESSION["mdp"] = $_POST["mdp"];
            if($_SESSION["mdp"] == "1234" ){
               echo"<div class='style1'> ton nom est :".$_SESSION["prenom"]. $_SESSION["mdp"]."</div>"; 
               $_SESSION["co"] = true;
               header("Refresh:0");
            } else{
                echo"<div class='style1'> Le mot de passe n'est pas bon.</div>";
            }     
        } else {
            echo"<div class='style1'> Le login n'est pas bon</div>";
        }
    } 
    else
        echo"";          
if(isset($_POST["Reset"])) {
    session_destroy();
}   
}


highlight_file((__FILE__))
?>

</form>
</body>
</html>
            