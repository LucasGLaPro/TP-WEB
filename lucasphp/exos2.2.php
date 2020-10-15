<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exos2.2</title>
</head>
<body>
    <?php
    $NOM; $AGE; $PRENOM;
        $table['NOM'] = 'Ghyselen';
        $table['PRENOM'] = 'Lucas';
        $table['AGE'] = '18';
        echo "Votre nom est".$table['NOM'];
        echo "<br>Votre nom est".$table['PRENOM'];
        echo "<br>Votre nom est".$table['AGE'];
        highlight_file((__FILE__))
    ?>
</body>
</html>