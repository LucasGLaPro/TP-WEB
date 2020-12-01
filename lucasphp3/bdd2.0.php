<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include "fonction.php";
?>
<form action="" method="post">
code SQL:<input type="text" name="requete" />
</form>
<?php
    if(isset($_POST["requete"])) {
echo afficher_requet_select($_POST['requete']);
    }
    else{
        echo("");
    }




?>
</body>
</html>