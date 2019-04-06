<?php
    $emploee1 = [
        'name' => 'Mike',
        'age' => 23,
        'home' => 'Kiev'
    ];
    $emploee2 = [
        'name' => 'Sara',
        'age' => 25,
        'home' => 'Donetsk'
    ];
    $emploee3 = [
        'name' => 'Vick',
        'age' => 33,
        'home' => 'Lviv'
    ];

    $emploees = [$emploee1, $emploee2, $emploee3 ];
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
<h1>List</h1>
<?php
    foreach ($emploees as $emploee)?>
<ul>
    <li>
        <b>Name:</b><?=$emploee['name'] ?> <br>
        <b>Age:</b><?=$emploee['age'] ?> <br>
        <b>Home:</b><?=$emploee['home'] ?> <br>
    </li>
</ul>

</body>
</html>