<?php include 'header.php' ?>

<div class="container">
    <?php include 'nav-sail.php' ?>
    <hr>
    <h1>Sezon 2016</h1>
    <p>Informacje o regatach</p>

    <div class="row">
        <?php
        include 'model.php';
        $model = Model::getInstance();
        $result = $model->getRegatta();
        $count = 0;
        foreach($result as $row){
            ?>
            <div class="col-md-12">
                <div class="panel-group">
                    <div class="panel
                     <?php if($row['status']==0){ echo "panel-default"; }else if($row['status']==1){ echo "panel-success"; }else{ echo "panel-warning";} ?>
                     ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse<?php echo $count; ?>"><?php echo $row['name'] ?><span class="pull-right glyphicon glyphicon-chevron-down"></span></a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $count; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12"><span class="regaty-nazwa">Klasa:</span> <?php echo $row['type'] ?></div>
                                    <div class="col-md-4 col-xs-12"><span class="regaty-nazwa">Termin:</span> <?php echo $row['date'] ?></div>
                                    <div class="col-md-4 col-xs-12"><span class="regaty-nazwa">Organizator:</span> <?php echo $row['organizer'] ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-12"><span class="regaty-nazwa"> <?php if($row['notification']) {echo '<a href="post.php?id='.$row['notification'].'" ">Zawiadomienie</a>';} ?></span></div>
                                    <div class="col-md-4 col-xs-12"><span class="regaty-nazwa"> <?php if($row['results']) {echo '<a href="post.php?id='.$row['results'].'" ">Wyniki</a>';} ?></span></div>
                                    <div class="col-md-4 col-xs-12"><span class="regaty-nazwa"> <?php if($row['gallery']) {echo '<a href="post.php?id='.$row['gallery'].'" ">Galeria</a>';} ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $count++;}?>

    </div>

    <h3>Legenda:</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default"><div class="panel-heading">Wstępna rezerwacja terminu regat</div> </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-warning"><div class="panel-heading">Regaty niepotwierdzone</div> </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success"><div class="panel-heading">Regaty potwierdzone</div> </div>
        </div>
    </div>
</div>

<?php include 'footer-sklep.php' ?>
