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
            $result = $model->getPost($id);
            if(!empty($result['id'])){
            ?>
            <h5>Tytuł:</h5>
            <textarea id="tytul" class="form-control" rows="1" name="tytul" required><?php echo $result['title'] ?></textarea>
            <h5>Tekst::</h5>
            <textarea id="tekst" class="form-control" rows="5" name="tekst" required><?php echo $result['text'] ?></textarea>
            <h5>Podaj obrazek:</h5>
<!--            <textarea id="obraz" class="form-control" rows="1" name="obraz" required>--><?php //echo $result['image'] ?><!--</textarea>-->
                <select name="obraz" class="pic-select">
                    <option value="news" <?php echo $result['image']== 'pic/news.jpg' ? 'selected' : '' ?>>News</option>
                    <option value="finish" <?php echo $result['image']== 'pic/finish.jpg' ? 'selected' : '' ?> >Regaty</option>
                    <option value="slon" <?php echo $result['image']== 'pic/slon.jpg' ? 'selected' : '' ?>>slon</option>
                </select>

            <?php }?>
            <button type="button" class="btn btn-primary pull-right" onclick="saveAsData(<?php echo $result['id'] ?>)">Wyślij</button>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
