<?php
    function tab()
    {
        ?>
        <table border='1'>
        <tr>
          <td>hehe</td>
          <td>Ligne1</td>
          <td>ligne2</td>
          <td>ligne3</td>
          <td>ligne4</td>
        </tr>
        <tr>
        </table>
        <?php
    }

    function tab2($a, $b, $c)
    {
        ?>
        <table border='1'>
        <tr>
          <td><?php echo"$a" ?></td>
          <td><?php echo"$b" ?></td>
          <td><?php echo"$c" ?></td>
        </tr>
        <tr>
        </table>
        <?php
    }

    function moy($a, $b, $c, $d, $f){
        $g = $a + $b + $c + $d + $f;
        $g = $g / 5;

        return $g;
    }






    function formu(){?><form method="post">

        Login:<input type="text" name="login" />
        Mot de passe:<input type="text" name="mdp" />
        <p><input type="submit" value="Valider" /></p></form>
        <?php

        if(isset($_POST["login"])) {
                if($_POST["login"] == "julien" && $_POST["mdp"] == "1234"){
                    return "ok";
                }
                else{
                    return "no"; 
                }
        }


    }
?>