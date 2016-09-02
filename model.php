<?php

class Model
{
    private static $instance;
    private $conn;

    private function __construct()
    {
        include 'db_config.php';

        try
        {
            $this->conn = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUserName, $dbPassword);
        }
        catch (PDOException $e)
        {
            //print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
            die("Błąd połaczenia z bazą! Sprobuj ponownie później.");
        }
    }

    private function __clone()
    {
    }

    public function saveData($title, $description, $descriptionmin, $image, $deleted)
    {
        try {
            $sql = "INSERT INTO news (title, date, who, image, textmin, text, deleted) VALUES (:title, CURDATE(), :who, :image, :descriptionmin, :description, :deleted)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':descriptionmin', $descriptionmin, PDO::PARAM_STR);
            $stmt->bindValue(':who', "admin", PDO::PARAM_STR);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
            $stmt->bindValue(':deleted', $deleted, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return $last_insert_id = $this->conn->lastInsertId();
               // return true;
            } else {

                return 0;
            }
        }catch(PDOException $e){
            return 0;
        }
    }

    public function saveDataGallery($title, $description, $descriptionmin, $image, $galleryurl, $deleted)
    {
        try {
            $sql = "INSERT INTO news (title, date, who, image, textmin, text, galleryurl, deleted) VALUES (:title, CURDATE(), :who, :image, :descriptionmin, :description, :galleryurl, :deleted)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':descriptionmin', $descriptionmin, PDO::PARAM_STR);
            $stmt->bindValue(':who', "admin", PDO::PARAM_STR);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
            $stmt->bindValue(':galleryurl', $galleryurl, PDO::PARAM_STR);
            $stmt->bindValue(':deleted', $deleted, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return $last_insert_id = $this->conn->lastInsertId();
                // return true;
            } else {

                return 0;
            }
        }catch(PDOException $e){
            return 0;
        }
    }

    public function saveDataNotification($title, $description, $descriptionmin, $image, $notificationurl, $deleted)
    {
        try {
            $sql = "INSERT INTO news (title, date, who, image, textmin, text, notificationurl, deleted) VALUES (:title, CURDATE(), :who, :image, :descriptionmin, :description, :notificationurl, :deleted)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':descriptionmin', $descriptionmin, PDO::PARAM_STR);
            $stmt->bindValue(':who', "admin", PDO::PARAM_STR);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
            $stmt->bindValue(':notificationurl', $notificationurl, PDO::PARAM_STR);
            $stmt->bindValue(':deleted', $deleted, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return $last_insert_id = $this->conn->lastInsertId();
                // return true;
            } else {

                return 0;
            }
        }catch(PDOException $e){
            return 0;
        }
    }

    public function saveRegatta($name, $type, $date, $organizer, $status, $deleted)
    {
        try {
            $sql = "INSERT INTO regatta (name, type, date, organizer, status, deleted) VALUES (:name, :type, :date, :organizer, :status, :deleted)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':type', $type, PDO::PARAM_STR);
            $stmt->bindValue(':date', $date, PDO::PARAM_STR);
            $stmt->bindValue(':organizer', $organizer, PDO::PARAM_STR);
            $stmt->bindValue(':status', $status, PDO::PARAM_STR);
            $stmt->bindValue(':deleted', $deleted, PDO::PARAM_STR);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }catch(PDOException $e){
            return false;
        }
    }

    public function saveAsData($title, $description, $descriptionmin, $image, $id, $deleted)
    {
        try {
            $sql = "UPDATE news SET title= :title, text= :description, textmin= :descriptionmin, who= :who, image= :image, deleted= :deleted WHERE id= :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':descriptionmin', $descriptionmin, PDO::PARAM_STR);
            $stmt->bindValue(':who', "admin", PDO::PARAM_STR);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
            $stmt->bindValue(':deleted', $deleted, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }catch (PDOException $e){
            return false;
        }

    }

    public function saveAsDataGallery($title, $description, $descriptionmin, $image, $id, $galleryurl, $deleted)
    {
        try {
            $sql = "UPDATE news SET title= :title, text= :description, textmin= :descriptionmin, who= :who, image= :image, galleryurl= :galleryurl, deleted= :deleted WHERE id= :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':descriptionmin', $descriptionmin, PDO::PARAM_STR);
            $stmt->bindValue(':who', "admin", PDO::PARAM_STR);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
            $stmt->bindValue(':deleted', $deleted, PDO::PARAM_STR);
            $stmt->bindValue(':galleryurl', $galleryurl, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }catch (PDOException $e){
            return false;
        }

    }

    public function saveAsDataNotification($title, $description, $descriptionmin, $image, $id, $notificationurl, $deleted)
    {
        try {
            $sql = "UPDATE news SET title= :title, text= :description, textmin= :descriptionmin, who= :who, image= :image, notificationurl= :notificationurl, deleted= :deleted WHERE id= :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':descriptionmin', $descriptionmin, PDO::PARAM_STR);
            $stmt->bindValue(':who', "admin", PDO::PARAM_STR);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
            $stmt->bindValue(':deleted', $deleted, PDO::PARAM_STR);
            $stmt->bindValue(':notificationurl', $notificationurl, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }catch (PDOException $e){
            return false;
        }

    }

    public function saveAsRegatta($name, $type, $date, $organizer, $status, $deleted, $id)
    {
        try {
            $sql = "UPDATE regatta SET name= :name, type= :type, date= :date, organizer= :organizer, status= :status, deleted= :deleted WHERE id= :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':type', $type, PDO::PARAM_STR);
            $stmt->bindValue(':date', $date, PDO::PARAM_STR);
            $stmt->bindValue(':organizer', $organizer, PDO::PARAM_STR);
            $stmt->bindValue(':status', $status, PDO::PARAM_STR);
            $stmt->bindValue(':deleted', $deleted, PDO::PARAM_STR);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }catch (PDOException $e){
            return false;
        }

    }

    public function resultsRegatta($id, $newsid)
    {
        try {
            $sql = "UPDATE regatta SET results= :newsid WHERE id= :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':newsid', $newsid, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }catch (PDOException $e){
            return false;
        }

    }

    public function notificationRegatta($id, $newsid)
    {
        try {
            $sql = "UPDATE regatta SET notification= :newsid WHERE id= :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':newsid', $newsid, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }catch (PDOException $e){
            return false;
        }

    }

    public function galleryRegatta($id, $newsid)
    {
        try {
            $sql = "UPDATE regatta SET gallery= :newsid WHERE id= :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':newsid', $newsid, PDO::PARAM_INT);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }catch (PDOException $e){
            return false;
        }

    }

    public function getPost($id)
    {
        $sql = "SELECT * FROM news WHERE id='$id' AND deleted = 0";
        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();

        return $stmt->fetch();
    }

    public function getEditPost($id)
    {
        $sql = "SELECT * FROM news WHERE id='$id'";
        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();

        return $stmt->fetch();
    }

    public function getEditRegatta($id)
    {
        $sql = "SELECT * FROM regatta WHERE id='$id'";
        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();

        return $stmt->fetch();
    }

    public function countPosts(){
        $sql = "SELECT COUNT(*) as ile FROM news WHERE deleted=0";
        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();

        return $stmt->rowCount();

    }

    public function getRandomPosts($id)
    {
        $sql = "SELECT * FROM news WHERE deleted = 0 AND id NOT IN (:id) ORDER BY id DESC LIMIT 3 ";

        $stmt = $this->conn->prepare( $sql );
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt;
    }

    public function getPosts($page)
    {
        $sql = "SELECT * FROM news WHERE deleted = 0 ORDER BY id DESC LIMIT :page, 3 ";

        $stmt = $this->conn->prepare( $sql );
        $stmt->bindValue(':page', $page, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt;
    }

    public function getRegatta()
    {
        $sql = "SELECT * FROM regatta WHERE deleted = 0 ORDER BY date ASC";

        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();

        return $stmt;//->fetchAll(PDO::FETCH_ASSOC);;
    }

    public function getGallery()
    {
        $sql = "SELECT news.id, regatta.name, news.galleryurl FROM news, regatta WHERE news.deleted = 0 AND news.galleryurl !='' AND news.id = regatta.gallery ORDER BY news.date ASC";

        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();

        return $stmt;//->fetchAll(PDO::FETCH_ASSOC);;
    }

    public function authGallery($id, $path)
    {
        $sql = "SELECT * FROM news WHERE id = :id AND galleryurl = :galleryurl LIMIT 1";

        $stmt = $this->conn->prepare( $sql );
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':galleryurl', $path, PDO::PARAM_STR);
        $stmt->execute();

        if( $stmt->rowCount() > 0) {
            $images = glob($path . '*.[jJ][pP][gG]');

            $imgtab = array();
            foreach($images as $image)
            {
                $imgtab[] = $image;

            }
            return json_encode($imgtab);
        }
    }

    public function getAllPosts()
    {
        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 15";

        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return json_encode($res);
    }

    public function getAllRegatta()
    {
        $sql = "SELECT * FROM regatta ORDER BY date ASC";

        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return json_encode($res);
    }

    public function getUser($login, $password) {
        $sql = "SELECT * FROM users WHERE name = :login";

        $stmt = $this->conn->prepare( $sql );
        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetchAll();

        $salt ="";
        $hash = "";
        foreach($data as $row) {
            $salt = $row['salt'];
            $hash = $row['password'];
        }
        if( $hash === hash('sha256', ($password.$salt)) ){
            return true;
        }else{
            return false;
        }

    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Model();
        }
        return self::$instance;
    }
}

?>