<?php
include 'model.php';

$command = $_GET['command'];
$model = Model::getInstance();
if($command == 'add') {
    header('Location: admin-add.php');
}
else if($command == 'delete'){
    header('Location: admin-delete.php');
}
else if($command == 'edit'){
    header('Location: admin-edit.php');
}
else if($command == 'tools'){
    header('Location: admin.php');
}
else {
    echo 'error';
}
?>