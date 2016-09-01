<?php
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Edytowanie wyścigu</p>
    <hr>
    <div class="row">
        <div class="col-md-5 ">
            <?php
            include('model.php');
            $id = $_GET['id'];
            $model = Model::getInstance();
            $result = $model->getEditRegatta($id);
            if(!empty($result['id'])){
                ?>
                <h5>Nazwa:</h5>
                <textarea id="nazwa" class="form-control" rows="1" name="nazwa" required><?php echo $result['name'] ?></textarea>
                <h5>Klasa:</h5>
                <textarea id="klasa" class="form-control" rows="1" name="klasa" placeholder="Delphia 24, Sportina 595"><?php echo $result['type'] ?></textarea>
                <h5>Data:</h5>
                <textarea id="data" class="form-control" rows="1" name="data" placeholder="2016-05-05"><?php echo $result['date'] ?></textarea>
                <h5>Organizator:</h5>
                <textarea id="organizator" class="form-control" rows="1" name="organizator"><?php echo $result['organizer'] ?></textarea>
                <h5>Status:</h5>
                <select name="stan" class="status-select">
                    <option value="0" <?php if($result['status'] == 0) {echo 'selected';} ?>>Wstępna rezerwacja terminu</option>
                    <option value="1" <?php if($result['status'] == 1) {echo 'selected';} ?>>Potwierdzone</option>
                    <option value="2" <?php if($result['status'] == 2) {echo 'selected';} ?>>Niepotwierdzone</option>
                </select>

                <h5>Wyświetlaj na głównej stronie:</h5>
                <select name="widok" class="view-select">
                    <option value="0" <?php echo $result['deleted']== 0 ? 'selected' : '' ?>>Tak</option>
                    <option value="1" <?php echo $result['deleted']== 1 ? 'selected' : '' ?>>Nie</option>
                </select>

            <?php }?>

            <button type="button" class="btn btn-primary pull-right" onclick="saveAsRegatta(<?php echo $result['id'] ?>)">Wyślij</button>
        </div>
    </div>
</div>
<?php include 'footer-admin.php' ?>
