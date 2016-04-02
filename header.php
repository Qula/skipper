<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aktualności</title>

    <link rel="stylesheet" href="bootstrap336/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="http://skipper.com.pl/Logo.png" alt="Skipper Logo">
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="user-interface.php">Strona główna</a></li>
                <li><a href="" data-toggle="modal" data-target="#aboutModal">Info</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                    <?php if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
                        echo '<li><a href="login.php" >Zaloguj się</a></li>';
                    }else{
                        echo '<li><a href="admin-manager.php?command=tools">Panel</a> </li>';
                        echo '<li><a href="user-manager.php?command=logout" >Wyloguj się</a></li>';
                    }
                    ?>

            </ul>
        </div>
    </div>
</nav>