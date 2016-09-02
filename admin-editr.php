<?php
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Edytowanie wyścigu</p>
    <hr>
    <?php
    include('model.php');
    $id = $_GET['id'];
    $model = Model::getInstance();
    $result = $model->getEditRegatta($id);
    if(!empty($result['id'])){
        ?>
        <div class="row">
            <div class="col-md-8">
                <form id="ajax-add" class="form-horizontal" role="form" method="post" action="ajax-manager.php" data-type="saveAsRegatta">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="tytul">Nazwa:</label>
                            <textarea id="tytul" class="form-control" rows="1" name="name" required><?php echo $result['name'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="tekstmin">Klasa</label>
                            <textarea id="tekstmin" class="form-control" rows="1" name="type" placeholder="Delphia 24, Sportina 595" required><?php echo $result['type'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="data">Data:</label>
                            <textarea id="data" class="form-control" rows="1" name="date" placeholder="2016-05-05" required><?php echo $result['date'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="organizator">Organizator:</label>
                            <textarea id="organizator" class="form-control" rows="1" name="organizer"placeholder="2016-05-05" required><?php echo $result['organizer'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="stan">Status:</label><br>
                            <select id="stan" name="status" class="view-select">
                                <option value="0" <?php if($result['status'] == 0) {echo 'selected';} ?>>Wstępna rezerwacja terminu</option>
                                <option value="1" <?php if($result['status'] == 1) {echo 'selected';} ?>>Potwierdzone</option>
                                <option value="2" <?php if($result['status'] == 2) {echo 'selected';} ?>>Niepotwierdzone</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="deleted">Wyswietlaj na głównej stronie:</label><br>
                            <select id="deleted" name="deleted" class="view-select">
                                <option value="0" <?php echo $result['deleted']== 0 ? 'selected' : '' ?>>Tak</option>
                                <option value="1" <?php echo $result['deleted']== 1 ? 'selected' : '' ?>>Nie</option>
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

    <?php }?>
</div>
<?php include 'footer-admin.php' ?>
