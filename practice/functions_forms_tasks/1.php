<?php
/**
 *Создать форму с двумя элементами textarea. При отправке формы скрипт
должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая
будет возвращать массив с общими словами.
 */

$firstForm[] = isset($_GET['first']) ?? null;
$secondForm[] = isset($_GET['second']) ?? null;
$arr = [];


/*function getCommonWords($a, $b){
    if ($a === $b){
        $arr [] = $a;
        return $arr;
    }

}

getCommonWords($firstForm, $secondForm);*/

var_dump($firstForm);
var_dump($secondForm);

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
<h1>Task 1</h1>

<form action="">
    <textarea name="first" cols="30" rows="10"></textarea>
    <br>
    <textarea name="second" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Go</button>
    <br>
</form>

</body>
</html>