<?php
session_start();

include 'model.php';

$command = $_GET['command'];

if($command === 'login') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $model = Model::getInstance();
    $result = $model->getUser($login, $password);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['login'] = $login;
        header('Location: admin.php');
    } else {
        header('Location: login.php?error=loginError');
    }
} else if ($command == 'logout') {
    session_start();
    session_destroy();
    header('Location: index.php');
} else {
    header('Location: index.php');
}
?>