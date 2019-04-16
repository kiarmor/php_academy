<?php
/**
 * Создать форму с элементом textarea.
 * При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
 * Реализовать с помощью функции.</p>
*/
declare(strict_types=1);

function getString ()
{
    $default = ' ';
    $message = isset($_POST['message']) ? $_POST['message'] : $default;
    return $message;
}
function separate ($val)
{
    $sep = ' ';
    $arr = explode($sep, $val);
    return $arr;
}

$mess = getString();

$arr = separate($mess);

usort($arr, function($a, $b){
    return strlen($b) - strlen($a);
});


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>
    <h1>Task 2</h1>
    <form method="post">
        <textarea name="message" cols="30" rows="10"></textarea> <br>
        <button type="submit">Send</button>
    </form>
    <?php if ($mess!== ' ') {

        for ($i = 0; $i < 3; $i++) {
        echo $arr[$i] . "<br>";
        }
    }
    ?>
</body>
</html>

