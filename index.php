<?php
session_start();
if(isset($_SESSION['login'])) {
    if(isset($_GET['command'])) {
        $command = $_GET['command'];
        if($command == 'logout') {
            header('Location: user-manager.php?command=logout');
        }
    } else {
        header('Location: zeglarstwo.php');
    }
}
else{
    if(isset($_GET['error'])) {
        header('Location: login.php?error=' . $_GET['error']);
    } else {
        header('Location: sklep.php');
    }
}
?>