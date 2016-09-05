<?php
$title = 'SKIPPER.COM.PL';
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Dodowanie regat</p>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <form id="ajax-add" class="form-horizontal" role="form" method="post" action="ajax-manager.php" data-type="saveRegatta">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="tytul">Nazwa:</label>
                        <textarea id="tytul" class="form-control" rows="1" name="name" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="tekstmin">Klasa</label>
                        <textarea id="tekstmin" class="form-control" rows="1" name="type" placeholder="Delphia 24, Sportina 595" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="data">Data:</label>
                        <textarea id="data" class="form-control" rows="1" name="date" placeholder="2016-05-05" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="organizator">Organizator:</label>
                        <textarea id="organizator" class="form-control" rows="1" name="organizer" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="stan">Status:</label><br>
                        <select id="stan" name="status" class="view-select">
                            <option value="0" >Wstępna rezerwacja terminu</option>
                            <option value="1" >Potwierdzone</option>
                            <option value="2" >Niepotwierdzone</option>
                        </select>
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
