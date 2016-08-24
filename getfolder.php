<?php



        include 'model.php';
        $model = Model::getInstance();
        $result = $model->getGallery();
        $count = 0;
        foreach($result as $row){
            ?>
            <div class="col-md-12">
                <?php echo $row['name'];?>
                <?php echo $row['galleryurl'];?>
                <div class="panel-group">
                    <div class="panel
                     <?php if($row['status']==0){ echo "panel-default"; }else if($row['status']==1){ echo "panel-success"; }else{ echo "panel-warning";} ?>">


                    </div>
                </div>
            </div>
        <?php }?>