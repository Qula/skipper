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
            <h5>Typ wpisu:</h5>
            <select name="obraz" class="pic-select">
                <option value="zawiadomienie">Zawiadomienie</option>
                <option value="wyniki">Wyniki</option>
                <option value="galeria">Galeria</option>
                <option value="inne" selected="selected">Inne</option>
            </select>
            <h5>Tytuł:</h5>
            <textarea id="tytul" class="form-control" rows="1" name="tytul" required></textarea>
            <h5>Tekst wyświetlany na głownej (max 400 znaków):</h5>
            <textarea id="tekstmin" class="form-control" rows="5" name="tekstmin" required></textarea>
            <h5>Tekst:</h5>
            <textarea id="tekst" class="form-control" rows="5" name="tekst" required></textarea>

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
