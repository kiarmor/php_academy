<?php
declare(strict_types=1);

function requestGet(string $key, ?string $default = null): ?string
{
    return $_GET[$key] ?? $default;
}

function requestPost(string $key, ?string $default = null): ?string
{
    return $_POST[$key] ?? $default;
}

function redirect(string $url): void
{
    $url = sprintf('Location: %s', $url);
    header($url);
    die;
}

function isDataValid(array $data): bool
{
    return !empty(trim($data['email'])) && !empty(trim($data['message']));
}

$flashMessage = strip_tags(requestGet('flashMessage', ''));
$fileName = 'comments.txt';
$comments = loadData($fileName);

if ($_POST){
    $comment = [
            'user' => $_POST['email'],
            'comment' => $_POST['message'],
            'data' => date('Y-m-d H:i:s')
    ];
    if (isDataValid($_POST)){
        saveData($fileName, $comment);
        redirect('/?flashMessage=Success');
    }
    $flashMessage = 'Invalid form';
}

function loadData(string $fileName): array
{
    if(!file_exists($fileName)){
        die('Erorr - File not found');
    }
    $contents = file_get_contents($fileName);
    $unserialized = @unserialize($contents);
    if (empty($unserialized)){
        return [];
    }
    return $unserialized;
}

function saveData(string $fileName, array $data)
{
    if(!file_exists($fileName)){
        die('Erorr - File not found');
    }
     $existingData = loadData($fileName);
     $existingData[] = $data;
     $serialized = serialize($existingData);
     file_put_contents($fileName, $serialized);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form method="post">
        <b style="color: red"><?= $flashMessage?></b> <br>
        Email:<br>
        <input type="email" name="email" value="<?=requestPost('email')?>"> <br>

        Message:<br>
        <textarea name="message"><?=requestPost('message')?></textarea> <br>

        <button type="submit">GO!</button>
    </form>
    <hr>
    <h2>Comments</h2>
    <?php foreach ($comments as $comment): ?>

    <?=$comment['user']?> <?=$comment['data']?> <br>
    <?=$comment['comment']?>
        <hr>
    <?php endforeach; ?>
</body>
</html>