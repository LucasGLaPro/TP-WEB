<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1 align="center">Exercice 3</h1>
    <?php
    include 'fonctions.php';?>
    <form action="" method="post">
    
        nombre1:<input type="number" name="nombre1" />
        nombre2:<input type="number" name="nombre2" />
        nombre3:<input type="number" name="nombre3" />
        nombre4:<input type="number" name="nombre4" />
        nombre5:<input type="number" name="nombre5" />
        <p><input type="submit" value="OK"></p>
<?php
if(isset($_POST["nombre1"])){
        echo moy($_POST['nombre1'], $_POST['nombre2'], $_POST['nombre3'], $_POST['nombre4'], $_POST['nombre5']);
}
    ?>
</body>
</html>