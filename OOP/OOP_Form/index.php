<?php

declare(strict_types=1);


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

if ($request->isPost()){
    if ($form->isValid()){
        //TODO save to DB
        $router->redirect('/');
    }
}


require_once 'template.phtml';