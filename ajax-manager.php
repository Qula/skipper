<?php
include "model.php";

$model = Model::getInstance();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['action'])) {
        if ($_POST['action'] == 'saveData') {
            $title = $_POST['title'];
            $text = $_POST['text'];
            $textmin = $_POST['textmin'];
            $img = 'pic/news/' . $_POST['image'] . '.jpg';
            $deleted = $_POST['deleted'];
            $ans = false;
            if (!empty($_POST['url']) && $_POST['url'] != 'undefined') {
                $url = $_POST['url'];
                switch ($_POST['image']) {
                    case 'zawiadomienie':
                        $ans = $model->saveDataNotification($title, $text, $textmin, $img, $url, $deleted);
                        break;
                    case 'galeria':
                        $ans = $model->saveDataGallery($title, $text, $textmin, $img, $url, $deleted);
                        break;
                }
            } else {
                $ans = $model->saveData($title, $text, $textmin, $img, $deleted);
            }
            $ansreg = true;;
            if (!empty($_POST['rid']) && $_POST['rid'] != 'undefined') {
                $rid = $_POST['rid'];
                switch ($_POST['image']) {
                    case 'zawiadomienie':
                        $ansreg = $model->notificationRegatta($rid, $ans);
                        break;
                    case 'wyniki':
                        $ansreg = $model->resultsRegatta($rid, $ans);
                        break;
                    case 'galeria':
                        $ansreg = $model->galleryRegatta($rid, $ans);
                        break;
                }
            }
            if ($ans && $ansreg) {
                http_response_code(200);
//                echo json_encode(array("Zapisano wpis."));
            } else {
                http_response_code(500);
//                echo json_encode(array("Wystąpił błąd."));
            }
        }
        if ($_POST['action'] == 'saveRegatta') {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $date = $_POST['date'];
            $organizer = $_POST['organizer'];
            $status = $_POST['status'];
            $deleted = $_POST['deleted'];
            $ans = $model->saveRegatta($name, $type, $date, $organizer, $status, $deleted);
            if ($ans) {
                http_response_code(200);
//                echo json_encode(array("Zapisano wpis."));
            } else {
                http_response_code(500);
//                echo json_encode(array("Wystąpił błąd."));
            }
        }
        if ($_POST['action'] == 'saveAsData') {
            $title = $_POST['title'];
            $text = $_POST['text'];
            $textmin = $_POST['textmin'];
            $img = 'pic/news/' . $_POST['image'] . '.jpg';
            $id = $_POST['id'];
            $deleted = $_POST['deleted'];
            $ans = false;
            if (!empty($_POST['url']) && $_POST['url'] != 'undefined') {
                $url = $_POST['url'];
                switch ($_POST['image']) {
                    case 'zawiadomienie':
                        // saveas dla zawiadomienia $ans = $model->saveData($title, $text, $textmin, $img, $deleted);
                        $ans = $model->saveAsDataNotification($title, $text, $textmin, $img, $id, $url, $deleted);

                        break;
                    case 'galeria':
                        $ans = $model->saveAsDataGallery($title, $text, $textmin, $img, $id, $url, $deleted);
                        break;
                }
            } else {
                $ans = $model->saveAsData($title, $text, $textmin, $img, $id, $deleted);
            }

            if ($ans) {
                http_response_code(200);
//                echo json_encode(array("Zapisano wpis."));
            } else {
                http_response_code(500);
//                echo json_encode(array("Wystąpił błąd."));
            }
        }
        if ($_POST['action'] == 'saveAsRegatta') {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $date = $_POST['date'];
            $organizer = $_POST['organizer'];
            $status = $_POST['status'];
            $deleted = $_POST['deleted'];
            $id = $_POST['id'];
            $ans = $model->saveAsRegatta($name, $type, $date, $organizer, $status, $deleted, $id);
            if ($ans) {
                http_response_code(200);
//                echo json_encode(array("Zapisano wpis."));
            } else {
                http_response_code(500);
//                echo json_encode(array("Wystąpił błąd."));
            }
        }
        if ($_POST['action'] == 'getPostList') {
            $result = $model->getAllPosts();
            echo $result;
        }
        if ($_POST['action'] == 'getRegattaList') {
            $result = $model->getAllRegatta();
            echo $result;
        }
        if ($_POST['action'] == 'getMorePosts') {
            $pagi = (int)$_POST['pagi'];
            //echo $pagi;
            //$test = 3;
            $result = $model->getPosts($pagi);
            echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));
        }
    }
}