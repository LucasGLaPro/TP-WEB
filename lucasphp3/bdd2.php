<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">

Login:<input type="text" name="login" />
Mot de passe:<input type="text" name="mdp" />
<p><input type="submit" value="Valider" /></p></form>
<?php 


//PDO attend 3 param : IP , Login, PASS
try{

    $MaBase = new PDO('mysql:host=192.168.65.192; dbname=lucasphpex2; charset=utf8','lucas', 'lucas');
    echo "je suis connecté";
    


    if(isset($_POST["login"])) {
    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `patient` WHERE `nom`='".$_POST['login']."' AND `prenom` = '".$_POST['mdp']."'"); 
            if($ObjetResultatDeRequeteBrut->rowCount()>=1){
                echo"*Connect";
            }
            else{
                echo"no"; 
            }
    }
}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}






?>
</body>
</html>