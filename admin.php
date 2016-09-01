<?php
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <hr>
    <h1>Aktualności</h1>
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-link" href="admin-manager.php?command=add">Dodaj</a>
            <button class="btn btn-link"  onclick="getPostList()">Edytuj</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div id="admin-op" class="col-md-10">
        </div>
    </div>
    <h1>Regaty</h1>
    <div class="row">
        <div class="col-md-10">
            <a class="btn btn-link" href="admin-manager.php?command=addRegatta">Dodaj</a>
            <button class="btn btn-link"  onclick="getRegattaList()">Edytuj</button>
        </div>
    </div>
    <div class="row">
        <div id="admin-regaty" class="col-md-10"></div>
    </div>
</div>
<?php include 'footer-admin.php' ?>
