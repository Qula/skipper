<?php
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Dodowanie wpisu</p>
    <hr>
    <div class="row">
        <div class="col-md-10 ">
                    <h5>Tytuł:</h5>
                    <textarea id="tytul" class="form-control" rows="1" name="tytul" required></textarea>
                    <h5>Tekst::</h5>
                    <textarea id="tekst" class="form-control" rows="5" name="tekst" required></textarea>
                    <h5>Podaj obrazek:</h5>
<!--                    <textarea id="obraz" class="form-control" rows="1" name="obraz" required></textarea>-->
                    <select name="obraz" class="pic-select">
                        <option value="news" selected="selected">News</option>
                        <option value="finish">Regaty</option>
                        <option value="slon">slon</option>
                    </select>
                    <h5>Wyswietlaj na głownej stronie:</h5>
                    <select name="widok" class="view-select">
                        <option value="0" selected>Tak</option>
                        <option value="1">Nie</option>
                    </select>
                    <button type="button" class="btn btn-primary pull-right" onclick="saveData()">Wyślij</button>
           </div>
    </div>
</div>
<?php include 'footer.php'?>
