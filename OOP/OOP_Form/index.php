<?php

declare(strict_types=1);




session_start();


$loaderFunction = function (string $className) {
    $fileName = "classes/{$className}.php";

    if (!file_exists($fileName)){
        throw new RuntimeException('Class not found');
    }

    require_once $fileName;
};

spl_autoload_register($loaderFunction);

$request = new Request($_GET, $_POST, $_FILES);
$session = new Session($_SESSION);
$form = new ContactForm(
    $request->post('email'),
    $request->post('message'),
    $request->post('attachment')
    );
$router = new Router();
$pdo = new PDO('mysql:host=localhost;dbname=message_db','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$flushMessage = '';
$sthComments = $pdo->query('SELECT * FROM messages ORDER BY id DESC ');
$comments = $sthComments->fetchAll(PDO::FETCH_ASSOC);


$sth = $pdo->prepare('INSERT INTO messages VALUES (null, :email, :message)');
if ($request->isPost()){
    if ($form->isValid()){
        $sth->execute([
            'email' => $form->email,
            'message' => $form->message
        ]);
        $session->setFlash('Saved');
        $router->redirect('/');
    }
}


require_once 'template.phtml';