<?php

class Model
{
    private static $instance;
    private $conn;

    private function __construct()
    {
        include 'db_config.php';
        $this->conn = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
        if ($this->conn->connect_error) {
            die("Błąd połączenia z bazą");
        }
    }

    private function __clone()
    {
    }

    public function saveData($title, $description, $image, $deleted) {
        $sql = "INSERT INTO news (title, date, who, image, text, deleted) VALUES ('".$title."', CURDATE(), '".'admin'."', '".$image."', '".$description."', '".$deleted."')";
        $this->conn->query($sql);
        if($this->conn->error) {
            return "error";
        } else {
            return "success";
        }
    }

    public function saveAsData($title, $description, $image, $id, $deleted)
    {
        $sql = "UPDATE news SET title='".$title."', text='".$description."', who='".'admin'."', image='".$image."', deleted='".$deleted."' WHERE id='".$id."'";
        $this->conn->query($sql);

        if($this->conn->error) {
            return "error";
        } else {
            return "success";
        }
    }

    public function getPost($id)
    {
        $sql = "SELECT * FROM news WHERE id='$id' AND deleted = 0";
        $result = $this->conn->query($sql);
        if($this->conn->error) {
            return "error";
        }
        return $result->fetch_assoc();
    }

    public function getEditPost($id)
    {
        $sql = "SELECT * FROM news WHERE id='$id'";
        $result = $this->conn->query($sql);
        if($this->conn->error) {
            return "error";
        }
        return $result->fetch_assoc();
    }

    public function countPosts(){
        $sql = "SELECT COUNT(*) as ile FROM news WHERE deleted=0";
        $result = $this->conn->query($sql);
        if($this->conn->error) {
            return "error";
        }
        return $result->fetch_row()[0];
    }

    public function getRandomPosts($id)
    {

        $sql = "SELECT * FROM news WHERE deleted = 0 AND id NOT IN ($id) ORDER BY id DESC LIMIT 3 ";
        $result = $this->conn->query($sql);

        $rows = [];
        while($row = $result->fetch_assoc())
        {
            $rows[]=$row;
        }
        return $rows;
    }

    public function getPosts()
    {
        $sql = "SELECT * FROM news WHERE deleted = 0 ORDER BY id DESC ";
        $result = $this->conn->query($sql);
        if($this->conn->error) {
            return "error";
        }
        $rows = [];
        while($row = $result->fetch_assoc())
        {
            $rows[]=$row;
        }
        return $rows;
    }

    public function getAllPosts()
    {
        $sql = "SELECT * FROM news ORDER BY id DESC";
        $result = $this->conn->query($sql);
        if($this->conn->error) {
            return "error";
        }
        $rows = [];
        while($row = $result->fetch_assoc())
        {
            $rows[]=$row;
        }
        return $rows;
    }

    public function getUser($login, $password) {
        $sql = "SELECT * FROM users WHERE name = '$login' AND password = '$password'";
        $result = $this->conn->query($sql);

        if($this->conn->error) {
            return "error";
        } else {
            return $result;
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