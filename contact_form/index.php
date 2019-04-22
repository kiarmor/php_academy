<?php
declare(strict_types=1);
session_start();
require_once 'functions.php';

$flashMessage = getFlashMessage();
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
        setFlashMessage('Comment added');
        redirect('/');
    }
    $flashMessage = 'Invalid form';
}


//var_dump($_FILES['attachment']);
//if size OK
// if type OK etc
//move_uploaded_file($_FILES['attachment']['tmp_name'], '/d/PHP_learn/less_1/contact_form ');
require_once 'main.phtml';
