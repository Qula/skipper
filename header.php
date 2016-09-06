<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title><?php echo $title; ?></title>
    <meta name="description" content="Sklep komputerowy w Nowym Sączu. Zajmujemy się sprzedażą sprzętu komputerowego, oprogramowania oraz kas i drukarek fiskalnych" />
    <meta name="keywords" content="sklep, komputery, serwis, kasy, drukarki, fiskalne," />
    <META name="company" content="SKIPPER">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap336/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="sklep.php"><img src="pic/logo.png" alt="Logo">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/skipper/sklep.php"><strong>Strona główna</strong></a></li>
                <li><a href="/skipper/zeglarstwo.php"><strong>Żeglarstwo</strong></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <?php if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
                    }else{
                        echo '<li><a href="admin-manager.php?command=tools">Panel</a> </li>';
                        echo '<li><a href="user-manager.php?command=logout" >Wyloguj się</a></li>';
                    }
                    ?>
            </ul>
        </div>
    </div>
</nav>