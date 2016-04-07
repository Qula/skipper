<?php
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Wybierz:</p>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-link" href="admin-manager.php?command=add">Dodaj</a>
            <button class="btn btn-link"  onclick="getPostList()">Edytuj</button>
            <button class="btn btn-link" onclick="getPostListDelete()">Usuń</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div id="admin-op" class="col-md-10">

        </div>
    </div>
</div>
<?php include 'footer.php'?>
