<?php include 'header.php' ?>

<div class="container">
    <?php include 'nav-sail.php' ?>
    <hr>
    <h1>Aktualności</h1>

    <div class="row">
        <?php
        include 'model.php';
        $model = Model::getInstance();
        $result = $model->getPosts(0);
//        echo $result;
        foreach($result as $row){
            ?>
        <div class="col-md-4 col-sm-6">
            <div class="col-md-12 post-min">
                <a href="post.php?id=<?php echo $row['id'] ?>" class="post-title"><?php echo $row['title'] ?></a>
                <div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo $row['date'] ?> / <?php echo $row['who'] ?></div>
                <div><img class="img-responsive" src="<?php echo $row['image'] ?>" alt="Obraz"></div>
                <div><?php echo substr($row['textmin'], 0, 400) ?>...</div>
                <a class="btn btn-primary read-more" href="post.php?id=<?php echo $row['id'] ?>">Czytaj więcej <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
               <?php }?>
        <div id="posts-load"></div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
            <button class="btn btn-primary btn-block " id="show-more" onclick="getMorePosts()" >Pokaż więcej</button>
        </div>
    </div>


</div>
<?php include 'footer-zagle.php' ?>
