<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exos2</title>
</head>
<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        $table[$i] = rand ( 0 , 100 );
       ?><table>
   <tr>
       <td><?php echo"nombre ".$i;?></td>
       <td><?php echo"est".$table[$i];?></td>
   </tr>
</table>
<?php
} 
highlight_file((__FILE__))
    ?>
</body>
</html>