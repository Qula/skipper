<?php
if(!isset($_SESSION['login'])){
    echo 'nope';
    header('Location: index.php');
}
?>