<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="kdpic/Mala_Plus.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Nasz zespół i jacht</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="kdpic/Mala_Plus.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Galeria zdjęć i filmów</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="kdpic/Mala_Plus.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>SEZON 2016</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="kdpic/Mala_Plus.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Prognoza pogody</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc"  data-kasa="lupo">
                <img src="kdpic/Lupo_1.JPG" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Aktualnosci</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="kdpic/Mala_Plus.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Najbliższe regaty</p>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <h1>Aktualności</h1>
    <p>Bądź na bieżąco!</p>
    <hr>
    <div class="row">
        <?php
        include 'model.php';
        $model = Model::getInstance();
        $result = $model->getPosts();
        foreach($result as $row){
            ?>
        <div class="col-md-4 col-sm-6">
            <div class="col-md-12 post-min">
                <h2 class="post-title"><?php echo $row['title'] ?></h2>
                <div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo $row['date'] ?> / <?php echo $row['who'] ?></div>
                <div><img class="img-responsive" src="<?php echo $row['image'] ?>" alt="Obraz"></div>
                <div><?php echo substr($row['text'], 0, 400) ?>...</div>
                <a class="btn btn-primary read-more" href="post.php?id=<?php echo $row['id'] ?>">Czytaj więcej <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>

        <?php }?>

    </div>
</div>
<?php include 'footer.php'?>
