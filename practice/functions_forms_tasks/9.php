<?php
/**
 * 9. Написать функцию, которая переворачивает строку.
 * Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
 */
declare(strict_types=1);
$default = ' ';
$text = isset($_GET['text']) ? $_GET['text'] : $default;

$text = strrev($text);

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
<h1>Task 9</h1>
<body>
    <form>
        <input type="text" name="text"> <br>
        <button type="submit">Send</button>
    </form>
    <h2>Answer</h2>
    <b><?php echo $text ?></b>
</body>
</html>