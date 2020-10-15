<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exos2.3</title>
</head>
<body>
    <?php
        $table['NOM'][0] = 'Ghyselen';
        $table['PRENOM'][0] = 'Lucas';
        $table['AGE'][0] = '18';
        $table['NOM'][1] = 'dupont';
        $table['PRENOM'][1] = 'julie';
        $table['AGE'][1] = '17';
        $table['NOM'][2] = 'Moi';
        $table['PRENOM'][2] = 'toi';
        $table['AGE'][2] = '16';
        for ($i = 0; $i <= 2; $i++) {
        echo "<br>Votre nom est ".$table['NOM'][$i];
        echo "<br>Votre prenom est ".$table['PRENOM'][$i];
        echo "<br>Votre age est ".$table['AGE'][$i];
            }
        highlight_file((__FILE__))
    ?>
</body>
</html>