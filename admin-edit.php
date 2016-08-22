<?php
include 'header.php';
include 'admin-header.php';
?>

<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Edytowanie wpisu</p>
    <hr>
    <div class="row">
        <div class="col-md-10 ">
            <?php
            include('model.php');
            $id = $_GET['id'];
            $model = Model::getInstance();
            $result = $model->getEditPost($id);
            if(!empty($result['id'])){
            ?>
            <h5>Typ wpisu:</h5>
            <select name="obraz" class="pic-select" disabled>
                <option value="zawiadomienie" <?php if($result['image'] == 'pic/news/zawiadomienie.jpg') {echo 'selected';} ?>>Zawiadomienie</option>
                <option value="wyniki" <?php if($result['image'] == 'pic/news/wyniki.jpg') {echo 'selected';} ?>>Wyniki</option>
                <option value="galeria" <?php if($result['image'] == 'pic/news/galeria.jpg') {echo 'selected';} ?>>Galeria</option>
                <option value="inne" <?php if($result['image'] == 'pic/news/inne.jpg') {echo 'selected';} ?>>Inne</option>
            </select>
            <h5>Tytuł:</h5>
            <textarea id="tytul" class="form-control" rows="1" name="tytul" required><?php echo $result['title'] ?></textarea>
            <h5>Tekst::</h5>
            <textarea id="tekst" class="form-control" rows="5" name="tekst" required><?php echo $result['text'] ?></textarea>

            <h5>Wyświetlaj na głównej stronie:</h5>
            <select name="widok" class="view-select">
                <option value="0" <?php echo $result['deleted']== 0 ? 'selected' : '' ?>>Tak</option>
                <option value="1" <?php echo $result['deleted']== 1 ? 'selected' : '' ?> >Nie</option>
            </select>

            <?php }?>
            <button type="button" class="btn btn-primary pull-right" onclick="saveAsData(<?php echo $result['id'] ?>)">Wyślij</button>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
