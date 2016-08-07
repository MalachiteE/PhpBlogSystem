<?php
class DBConnection
{
    private static $instance;
    private $connection;
    
    private $dns = 'mysql:host=localhost;dbname=aquarium';
    private $username = 'root';
    private $pass = '';
    

    private function __construct(){
        $this->connection = new \PDO($this->dns, $this->username, $this->pass);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function __clone(){}

    public static function getInstance(){
        if(empty(self::$instance)){
            self::$instance = new DBConnection();
        }

        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }

    public static function getDBConnection(){
        return self::getInstance()->getConnection();
    }
	
}
