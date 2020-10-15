<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exos4</title>
</head>
<body>
    <?php
    $a = 3; $b = -2; $c = -16; $result1; $result2; $result3; $result4; $x11; $x111; $x2; $x5; $x6; $x7;
    $result1 = $b * $b;
    $result2 = -4 * $a * $c;
    $result3 = $result1 + $result2;
    //echo"".$result3;
    $x5 = sqrt($result3);
    //echo"".$x5;
    if($result3 < 0)
    {
        echo"l'equation n'a pas de solition réel";
    } elseif ($result3 == 0)
    {
       $result4 = -$b/2*$a;
        echo"le resultat est".$result4;
    }
    else {
        $x11 = -$b -sqrt($result3);
        $x1 = 2*$a;
        $x6 = $x11 / $x1;


        $x111 = -$b +sqrt($result3);
        $x2 = 2*$a;
        $x7 = $x111 / $x2;


        echo"S={ ".$x6; echo"  ;  ".$x7; echo"}";
    }
    highlight_file((__FILE__))
    ?>
</body>
</html>