<?php
session_start();

include 'model.php';

$command = $_GET['command'];

if($command === 'login') {
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
        $secretKey = "6LfGxBwTAAAAAFycodYmMbqdZXZSnZyvQ2_CGCqd";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        echo $responseKeys['success'];
        if($responseKeys['success'] === true ) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $model = Model::getInstance();
            $result = $model->getUser($login, $password);

            if ($result) {
                session_start();
                $_SESSION['login'] = $login;
                header('Location: admin.php');
            } else {
                header('Location: login.php?error=loginError');
            }
        }else{
            header('Location: login.php?error=recaptchaError');
        }
    }
    else{
        header('Location: login.php?error=recaptchaError');
    }



} else if ($command == 'logout') {
    session_start();
    session_destroy();
    header('Location: index.php');
} else {
    header('Location: index.php');
}
?>