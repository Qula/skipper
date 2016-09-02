<?php
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Dodowanie wpisu</p>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <form id="ajax-add" class="form-horizontal" role="form" method="post" action="ajax-manager.php" data-type="saveData">
                <div class="form-group dodatkowe-opcje">
                    <div class="col-md-12">
                        <label for="image">Typ wpisu:</label><br>
                        <select id="image" name="image" class="pic-select">
                            <option value="zawiadomienie">Zawiadomienie</option>
                            <option value="wyniki">Wyniki</option>
                            <option value="galeria">Galeria</option>
                            <option value="inne" selected="selected">Inne</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="tytul">Tytuł:</label>
                        <textarea id="tytul" class="form-control" rows="1" name="title" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="tekstmin">Tekst wyświetlany na głownej (max 400 znaków):</label>
                        <textarea id="tekstmin" class="form-control" rows="5" name="textmin" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="tekst">Tekst:</label>
                        <textarea id="tekst" class="form-control" rows="5" name="text" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="deleted">Wyswietlaj na głównej stronie:</label><br>
                        <select id="deleted" name="deleted" class="view-select">
                            <option value="0" selected>Tak</option>
                            <option value="1">Nie</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="submit" name="submit" type="submit" value="Wyślij" class="btn btn-primary pull-right">
                    </div>
                </div>
            </form>
            <div class="form-group">
                <div class="col-md-12">
                    <div id="form-messages"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer-admin.php' ?>
