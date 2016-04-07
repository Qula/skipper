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
            <h5>Tytuł:</h5>
            <textarea id="tytul" class="form-control" rows="1" name="tytul" required><?php echo $result['title'] ?></textarea>
            <h5>Tekst::</h5>
            <textarea id="tekst" class="form-control" rows="5" name="tekst" required><?php echo $result['text'] ?></textarea>
            <h5>Podaj obrazek:</h5>
            <select name="obraz" class="pic-select">
                <option value="news" <?php echo $result['image']== 'pic/news.jpg' ? 'selected' : '' ?>>News</option>
                <option value="finish" <?php echo $result['image']== 'pic/finish.jpg' ? 'selected' : '' ?> >Regaty</option>
                <option value="slon" <?php echo $result['image']== 'pic/slon.jpg' ? 'selected' : '' ?>>slon</option>
            </select>
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
