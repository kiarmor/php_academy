<?php

$numberRow = isset($_GET['rows']) ? range(1, $_GET['rows']) : null;
$numberCol = isset($_GET['cols']) ? range(1, $_GET['cols']) : null;

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

<form>
    Rows: <input type="number" min="1" max="15" name="rows"> <br>
    Cols: <input type="number" min="1" max="15" name="cols"> <br>
    <button>Go</button>
</form>

<hr>

<?php if (!$numberRow || !$numberCol) : ?>
    <h1>Enter correct number</h1>
<?php else : ?>
    <h1>Table</h1>
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
<?php endif; ?>

</body>
</html>