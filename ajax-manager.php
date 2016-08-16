<?php
include "model.php";

$model = Model::getInstance();
if(!empty($_POST['action'])){
    if($_POST['action'] == 'saveData'){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $img = $_POST['image'];
        $deleted = $_POST['deleted'];
        $ans = $model->saveData($title, $text, $img, $deleted);
        if($ans){
            echo json_encode(array("Zapisano wpis."));
        }else{
            echo json_encode(array("Wystąpił błąd."));
        }
    }
    if($_POST['action'] == 'saveAsData'){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $img = $_POST['image'];
        $id = $_POST['id'];
        $deleted = $_POST['deleted'];
        $ans = $model->saveAsData($title, $text, $img, $id, $deleted);
        if($ans){
            echo json_encode(array("Zapisano wpis."));
        }else{
            echo json_encode(array("Wystąpił błąd."));
        }
    }
    if($_POST['action'] == 'getPostList'){
        $result = $model->getAllPosts();
        echo $result;
    }
    if($_POST['action'] == 'getMorePosts'){
        $pagi = (int)$_POST['pagi'];
        //echo $pagi;
        //$test = 3;
        $result = $model->getPosts($pagi);
        echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));
    }
}