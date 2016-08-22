<?php

class UsersDao{
    
    private static $SELECT_QUERY = "SELECT id,username,password,email FROM users WHERE email=:EMAIL AND password=:PASSWORD LIMIT 1";
    private static $INSERT_QUERY = "INSERT INTO users(username, password, email) VALUES(:USERNAME, :PASSWORD, :EMAIL)";
    private static $SELECT_EMAIL_QUERY = "SELECT email FROM users WHERE email=:EMAIL LIMIT 1";
    
    public function retrieveUserFromDB($connection,$username,$password){
        $stmt = $connection->prepare(self::SELECT_QUERY);
        $stmt->bindValue(":USERNAME", strip_tags($username), PDO::PARAM_STR);
        $stmt->bindValue(":PASSWORD", md5(strip_tags($password)), PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        return new UsersDto($row['username'], $row['password'], $row['email']);
    }
    
    
    public function insertUser($connection, UsersDto $user){
        //echo "<pre>", var_export($user), "</pre>";die();
        $stmt = $connection->prepare(self::$INSERT_QUERY);
        $stmt->bindValue(":USERNAME", $user->getUsername(), PDO::PARAM_STR);
        $stmt->bindValue(":PASSWORD", $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(":EMAIL", $user->getEmail(), PDO::PARAM_STR);
        
        return $stmt->execute();
    }
    
    public function hasUserRegistration($connection, UsersDto $user){
        $stmt = $connection->prepare(self::$SELECT_EMAIL_QUERY);
        $stmt->bindValue(":EMAIL", $user->getEmail(), PDO::PARAM_STR);
        $stmt->execute();
        
        if($stmt->fetch(PDO::FETCH_ASSOC)){
            return true;
        }
        
        return false;   
    }
    
    public function authentication($connection, $user){
       
        $stmt = $connection->prepare(self::$SELECT_QUERY);
        $stmt->bindValue(":EMAIL", $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(":PASSWORD", $user->getPassword(), PDO::PARAM_STR);
        $stmt->execute();
        
        if($stmt->fetch(PDO::FETCH_ASSOC)){
            return true;
        }
        
        return false; 
    }
}

