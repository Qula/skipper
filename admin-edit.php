<?php include 'header.php' ?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Edytowanie wpisu</p>
    <hr>
    <div class="row">
        <div class="col-md-10 ">
            <h5>Tytuł:</h5>
            <textarea id="tytul" class="form-control" rows="1" name="tytul" required></textarea>
            <h5>Tekst::</h5>
            <textarea id="tekst" class="form-control" rows="5" name="tekst" required></textarea>
            <h5>Podaj obrazek:</h5>
            <textarea id="obraz" class="form-control" rows="1" name="obraz" required></textarea>
            <button type="button" class="btn btn-primary" onclick="saveData()">Wyślij</button>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
