<?php
$title = 'SKIPPER.COM.PL';
include 'header.php';
include 'admin-header.php';
?>
<div class="container">
    <h1>Panel administracyjny</h1>
    <p>Edytowanie wpisu</p>
    <hr>
    <?php
    include('model.php');
    $id = $_GET['id'];
    $model = Model::getInstance();
    $result = $model->getEditPost($id);
    if(!empty($result['id'])){
    ?>
        <div class="row">
            <div class="col-md-12">
                <form id="ajax-add" class="form-horizontal" role="form" method="post" action="ajax-manager.php" data-type="saveAsData">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group dodatkowe-opcje">
                        <div class="col-md-12">
                            <label for="image">Typ wpisu:</label><br>
                            <select id="image" name="image" class="pic-select" disabled>
                                <option value="zawiadomienie" <?php if($result['image'] == 'pic/news/zawiadomienie.jpg') {echo 'selected';} ?>>Zawiadomienie</option>
                                <option value="wyniki" <?php if($result['image'] == 'pic/news/wyniki.jpg') {echo 'selected';} ?>>Wyniki</option>
                                <option value="galeria" <?php if($result['image'] == 'pic/news/galeria.jpg') {echo 'selected';} ?>>Galeria</option>
                                <option value="inne" <?php if($result['image'] == 'pic/news/inne.jpg') {echo 'selected';} ?>>Inne</option>
                            </select>
                        </div>
                    </div>
                    <?php if($result['galleryurl'] != ''){
                        ?>
                        <div class='form-group zawiadomienie'>
                            <div class='col-md-12'>
                                <label for='link'>Link do galerii:</label>
                                <textarea id='link' class='form-control zawiadomienie add-url' rows='1' name='url' placeholder='galeria/Puchar Wojta Gminy Grodek nad Dunajcem/' required><?php echo $result['galleryurl'] ?></textarea></div></div>
                        <?php
                    }?>
                    <?php if($result['notificationurl'] != ''){
                        ?>
                        <div class='form-group zawiadomienie'>
                            <div class='col-md-12'>
                                <label for='link'>Link do zawiadomienia:</label>
                                <textarea id='link' class='form-control zawiadomienie add-url' rows='1' name='url' placeholder='zawiadomienia/V%20Regaty%20o%20Puchar%20Gumowego%20Ryjka.jpg' required><?php echo $result['notificationurl'] ?></textarea></div></div>
                        <?php
                    }?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="tytul">Tytuł:</label>
                            <textarea id="tytul" class="form-control" rows="1" name="title" required><?php echo $result['title'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="tekstmin">Tekst wyświetlany na głownej (max 400 znaków):</label>
                            <textarea id="tekstmin" class="form-control" rows="5" name="textmin" required><?php echo $result['textmin'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="tekst">Tekst:</label>
                            <textarea id="tekst" class="form-control" rows="5" name="text" required><?php echo $result['text'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="deleted">Wyswietlaj na głównej stronie:</label><br>
                            <select id="deleted" name="deleted" class="view-select">
                                <option value="0" <?php echo $result['deleted']== 0 ? 'selected' : '' ?>>Tak</option>
                                <option value="1" <?php echo $result['deleted']== 1 ? 'selected' : '' ?> >Nie</option>
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
