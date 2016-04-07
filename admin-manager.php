<?php
include 'model.php';

$command = $_GET['command'];
$model = Model::getInstance();
if($command == 'add') {
    header('Location: admin-add.php');
}
else if($command == 'edit'){
    $id = $_GET['id'];
    header('Location: admin-edit.php?id='.$id);
}
else if($command == 'tools'){
    header('Location: admin.php');
}
else {
    echo 'error';
}
?>