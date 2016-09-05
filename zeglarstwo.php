<?php
$title = 'SKIPPER.COM.PL - żeglarstwo';
include 'header.php' ?>

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
        <div class="col-md-4 col-sm-6 post-hover">
            <div class="col-md-12 post-min">
                <a href="post.php?id=<?php echo $row['id'] ?>" class="post-title"><?php if(strlen($row['title']) < 25){echo $row['title'];}else{echo substr($row['title'], 0, 23).'...'; }?></a>
                <div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo $row['date'] ?> / <?php echo $row['who'] ?></div>
                <img class="img-responsive" src="<?php echo $row['image'] ?>" alt="Obraz">
                <div><?php echo substr($row['textmin'], 0, 100) ?>...</div>
                <a class="btn btn-primary read-more" href="post.php?id=<?php echo $row['id'] ?>">Czytaj więcej <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
               <?php }?>
        <div id="posts-load"></div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-12">
            <button class="btn btn-primary btn-block" id="show-more" onclick="getMorePosts()" >Pokaż więcej</button>
        </div>
    </div>


</div>
<?php include 'footer-zagle.php' ?>
