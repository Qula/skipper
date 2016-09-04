<?php include 'header.php' ?>
<div class="container">
    <?php include 'nav-sail.php' ?>
    <hr>
    <h1>Galeria</h1>
    <h3>Filmy:</h3>
    <div class="row video">
        <div class="col-md-3 col-xs-6">
            <a class="popup-video" href="https://www.youtube.com/watch?v=60SgCIjchbM">
                <img src="pic/filmy/film5.jpg" class="img-responsive">
            </a>
        </div>
        <div class="col-md-3 col-xs-6">
            <a class="popup-video" href="https://www.youtube.com/watch?v=aJIT700PUKM">
                <img src="pic/filmy/film4.jpg" class="img-responsive">
            </a>
        </div>
        <div class="col-md-3 col-xs-6">
            <a class="popup-video" href="https://www.youtube.com/watch?v=pQFC0uaRL5U">
                <img src="pic/filmy/film3.jpg" class="img-responsive">
            </a>
        </div>
        <div class="col-md-3 col-xs-6">
            <a class="popup-video" href="https://www.youtube.com/watch?v=cyjsaasfwus">
                <img src="pic/filmy/film2.jpg" class="img-responsive">
            </a>
        </div>
        <div class="col-md-3 col-xs-6">
            <a class="popup-video" href="https://www.youtube.com/watch?v=NYO5Y5qIF-E">
                <img src="pic/filmy/film1.jpg" class="img-responsive">
            </a>
        </div>
    </div>
    <h3>Zdjęcia:</h3>
    <div class="row">
        <div class="col-md-12">
        <?php
        include 'model.php';
        $model = Model::getInstance();
        $result = $model->getGallery();
        $count = 0;
        foreach($result as $row){
            ?>
                <button class="btn btn-primary btn-lg galbut" data-id="<?php echo $row['id'];?>" data-url="<?php echo $row['galleryurl'];?>"><?php echo $row['name'];?></button>
            <?php }?>
            </div>
    </div>
</div>
<?php include 'footer-zagle.php' ?>
