<?php

define('MIN', 1);
define('MAX', 20);

$colEnd = rand(MIN, MAX);
$rowEnd = rand(MIN, MAX);

$numberRow = range(1, $rowEnd);
$numberCol = range(1, $colEnd);

/*$min = min($start, $end);
$max = max($start, $end);*/
/*$numbers = range($min, $max);*/

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Table</h1>
<!--<b><?/*=$min*/?></b>
<b><?/*=$max*/?></b>-->
    <table border="1">
        <?php foreach ($numberRow as $nr) :
            $r = rand(1, 255);
            $g = rand(1, 255);
            $b = rand(1, 255);
            ?>
        <tr style="background: rgb(<?=$r ?>, <?=$g ?>, <?=$b ?>)">
            <?php foreach ($numberCol as $nc) : ?>
            <td> <?=$nr * $nc ?>   </td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>