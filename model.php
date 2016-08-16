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
            $this->conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUserName, $dbPassword);
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

    public function saveData($title, $description, $image, $deleted)
    {
        try {
            $sql = "INSERT INTO news (title, date, who, image, text, deleted) VALUES (:title, CURDATE(), :who, :image, :description, :deleted)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':who', "admin", PDO::PARAM_STR);
            $stmt->bindValue(':image', $image, PDO::PARAM_STR);
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

    public function saveAsData($title, $description, $image, $id, $deleted)
    {
        try {
            $sql = "UPDATE news SET title= :title, text= :description, who= :who, image= :image, deleted= :deleted WHERE id= :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
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

    public function getAllPosts()
    {
        $sql = "SELECT * FROM news ORDER BY id DESC";

        $stmt = $this->conn->prepare( $sql );
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return json_encode($res);
    }

    public function getUser($login, $password) {
        $sql = "SELECT * FROM users WHERE name = :login AND password = :password";

        $stmt = $this->conn->prepare( $sql );
        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->rowCount() >0){
            return true;
        }else {
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