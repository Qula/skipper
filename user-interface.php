<?php include 'header.php' ?>

<div class="container">
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
