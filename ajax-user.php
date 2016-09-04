<?php
include "model.php";

$model = Model::getInstance();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['action'])) {
        if ($_POST['action'] == 'getMorePosts') {
            $pagi = (int)$_POST['pagi'];
            $result = $model->getPosts($pagi);
            echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));
        }
        if ($_POST['action'] == 'authGallery' && $_POST['id'] != 'undefined' && $_POST['path'] != 'undefined'){
            $id = $_POST['id'];
            $path = $_POST['path'];
            $result = $model->authGallery($id, $path);
            echo $result;

        }
    }
}