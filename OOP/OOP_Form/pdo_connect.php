<?php

$pdo = new PDO('mysql:host=localhost;dbname=message_db',
    'root',
    '');

//$pdo->query('INSERT INTO messages VALUES (NULL, "HELLO", "WORLD") ');
//statement handler
$sth = $pdo->prepare('INSERT INTO messages VALUES (NULL, :email, :message)');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sth->execute([
    'email' => 'Hell',
    'message' => 'War'
]);