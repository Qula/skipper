<?php
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Dodowanie regat</p>
    <hr>
    <div class="row">
        <div class="col-md-5 ">
            <h5>Nazwa:</h5>
            <textarea id="nazwa" class="form-control" rows="1" name="nazwa" required></textarea>
            <h5>Klasa:</h5>
            <textarea id="klasa" class="form-control" rows="1" name="klasa" placeholder="Delphia 24, Sportina 595"></textarea>
            <h5>Data:</h5>
            <textarea id="data" class="form-control" rows="1" name="data" placeholder="2016-05-05"></textarea>
            <h5>Organizator:</h5>
            <textarea id="organizator" class="form-control" rows="1" name="organizator"></textarea>
            <h5>Status:</h5>
            <select name="stan" class="status-select">
                <option value="0" >Wstępna rezerwacja terminu</option>
                <option value="1" >Potwierdzone</option>
                <option value="2" >Niepotwierdzone</option>
            </select>

            <h5>Wyświetlaj na głównej stronie:</h5>
            <select name="widok" class="view-select">
                <option value="0" >Tak</option>
                <option value="1" >Nie</option>
            </select>
            <button type="button" class="btn btn-primary pull-right" onclick="saveRegatta()">Wyślij</button>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
