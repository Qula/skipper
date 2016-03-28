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

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Model();
        }
        return self::$instance;
    }
}

?>