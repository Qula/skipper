<?php include 'header.php' ?>

<div class="container">
    <h1>Aktualności</h1>
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
                    <a href="post.php?id=<?php echo $result['id'] ?>" class="post-title"><?php echo $result['title'] ?></a>
                    <div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo $result['date'] ?> / <?php echo $result['who'] ?></div>
                    <div><img class="img-responsive" src="<?php echo $result['image'] ?>" alt="Obraz"></div>
                    <br>
                    <div><?php echo $result['text']?></div>
                    <br>
                    <?php if($result['notificationurl'] !=''){?>
                        <a href="<?php echo $result['notificationurl']; ?>" class="popup-img"><img src="<?php echo $result['notificationurl']; ?>" class="img-responsive center-block"></a>
                    <?php }else if($result['galleryurl'] !=''){ ?>

                    <button class="btn btn-primary btn-lg galbut col-xs-12" data-id="<?php echo $result['id'];?>" data-url="<?php echo $result['galleryurl'];?>">Wyświetl galerię</button>

                    <?php }?>

                    <br><a class="btn btn-primary backbtn " onclick="goBack()">Wróć </a>
                </div>
            <?php
            }else{?>
                <h2 class="post-title">Taki wpis nie istnieje!</h2>
            <?php
            }

            $model = Model::getInstance();
            $result = $model->getRandomPosts($id);

        }else{
            $model = Model::getInstance();
            $id = $model->countPosts();
            $result = $model->getRandomPosts($id);
            ?>
            <h2 class="post-title">Taki wpis nie istnieje!</h2>


        <?php
        }


        ?>
        </div>
        <div class="col-md-4 col-sm-5">
            <?php foreach($result as $row){ ?>
            <div class="col-md-12 post-min">
                <a  href="post.php?id=<?php echo $row['id'] ?>" class="post-title"><?php if(strlen($row['title']) < 27){echo $row['title'];}else{echo substr($row['title'], 0, 25).'...'; }?></a>
                <div class="post-date"><span class="glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> <?php echo $row['date'] ?> / <?php echo $row['who'] ?></div>
                <div><img class="img-responsive" src="<?php echo $row['image'] ?>"></div>
                <div><?php echo substr($row['textmin'], 0, 100) ?></div>
                <a class="btn btn-primary read-more" href="post.php?id=<?php echo $row['id'] ?>">Czytaj więcej <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer-sklep.php' ?>
