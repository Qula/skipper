<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <a href="#">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="col-md-12 head-desc">
                    <img src="pic/onas.png" class="img-responsive" alt="">
                    <div class="head-name">
                        <p>O nas</p>
                    </div>
                </div>
            </div>
        </a>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="pic/kasydrukarki.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Kasy i&nbspdrukarki</p>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="pic/serwis.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Serwis</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="pic/oprogramowanie.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Oprogramowanie</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="pic/sprzetkomputerowy.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Sprzęt komputerowy</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <div class="col-md-12 head-desc">
                <img src="pic/oprogramowaniedlafirm.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Oprogramowanie dla&nbspfirm</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="col-md-12 head-desc">
                <img src="pic/terminale.jpg" class="img-responsive" alt="">
                <div class="head-name">
                    <p>Terminale płatnicze</p>
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
