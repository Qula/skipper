<?php

//echo hash('sha256', ("Pogoria49er"."fe7adf7a19302848ee95855067b4dc03eda03e78617456dad17d5fa706792119"));


        include 'model.php';
        $model = Model::getInstance();
        $result = $model->getGallery();
        $count = 0;
        foreach($result as $row){
            ?>
            <div class="col-md-12">
                <?php echo $row['name'];?>
                <br>
                <?php echo $row['galleryurl'];

                $directory = "galeria/Puchar Gumowego Ryjka Nad Zatoka/";
                $images = glob($directory . "*.jpg");

                foreach($images as $image)
                {
                    echo '<br>';
                    echo $image;
                }
    echo '<span>YYY</span>';

                ?>

                <div class="panel-group">
                    <div class="panel
                     <?php if($row['status']==0){ echo "panel-default"; }else if($row['status']==1){ echo "panel-success"; }else{ echo "panel-warning";} ?>">


                    </div>
                </div>
            </div>
        <?php }?>