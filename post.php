<?php include 'header.php' ?>

<div class="container">
    <h1>Aktualności</h1>
    <p>Bądź na bieżąco!</p>
    <div class="row">
        <div class="col-md-8 col-sm-7">
        <?php
        include 'model.php';
        if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $model = Model::getInstance();
        $result = $model->getPost($id);
            if(!empty($result['id'])){
            ?>
                <div class="col-md-12 post-max">
                    <h2 class="post-title"><?php echo $result['title'] ?></h2>
                    <div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo $result['date'] ?> / <?php echo $result['who'] ?></div>
                    <div><img class="img-responsive" src="<?php echo $result['image'] ?>" alt="Obraz"></div>
                    <br>
                    <div><?php echo $result['text']?></div>
                    <br>
                    <a class="btn btn-primary" onclick="goBack()">Wróć </a>
                </div>
            <?php
            }else{?>
                <h2 class="post-title">Taki wpis nie istnieje!</h2>
            <?php
            }
        }else{
            ?>
            <h2 class="post-title">Taki wpis nie istnieje!</h2>
        <?php
        }

        $model = Model::getInstance();
        $result = $model->getRandomPosts();
        ?>
        </div>
        <div class="col-md-4 col-sm-5">
            <?php foreach($result as $row){ ?>
            <div class="col-md-12 post-min">
                <h2 class="post-title"><?php echo $row['id'] ?></h2>
                <div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo $row['date'] ?> / <?php echo $row['who'] ?></div>
                <div><img class="img-responsive" src="<?php echo $row['image'] ?>"></div>
                <div><?php echo $row['text'] ?></div>
                <a class="btn btn-primary read-more" href="post.php?id=<?php echo $row['id'] ?>">Czytaj więcej <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
