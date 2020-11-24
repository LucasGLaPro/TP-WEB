<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "coucou"; 


//PDO attend 3 param : IP , Login, PASS
try{

    $MaBase = new PDO('mysql:host=192.168.65.192; dbname=lucasphpex2; charset=utf8','lucas', 'lucas');
    echo "je suis connecté";

    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `patient`");
    echo "j'ai fait une requête de ".$ObjetResultatDeRequeteBrut->rowCount()." Tuple";

    while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch()){
        echo $TableauDunTuple["nomss"]." ".$TableauDunTuple["nom"]."<br>";
    };


}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
?>
</body>
</html>