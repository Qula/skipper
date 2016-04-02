<?php
include "model.php";

$model = Model::getInstance();
if(!empty($_POST['action'])){
    if($_POST['action'] == 'saveData'){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $img = $_POST['image'];
        $model->saveData($title, $text, $img);
        echo json_encode(array("Zapisano"));
    }
    if($_POST['action'] == 'editData'){

    }
}