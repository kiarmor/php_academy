<?php

define('MIN', 1);
define('MAX', 10);
$numbers = range(MIN, MAX);

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
    <table border="1">
        <?php foreach ($numbers as $numberRow) :  ?>
        <tr>
            <?php foreach ($numbers as $numberCol) :  ?>
            <td> <?=$numberRow * $numberCol ?>   </td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>