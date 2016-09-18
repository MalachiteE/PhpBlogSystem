<?php

class UsersDao{
    
    private static $SELECT_QUERY = "SELECT id,username,password,email FROM users WHERE email=:EMAIL AND password=:PASSWORD LIMIT 1";
    private static $INSERT_QUERY = "INSERT INTO users(username, password, email) VALUES(:USERNAME, :PASSWORD, :EMAIL)";
    private static $SELECT_BY_EMAIL_QUERY = "SELECT id,username,password,email FROM users WHERE email=:EMAIL LIMIT 1";  
    
    public static function insert($connection, UsersDto $user){
        //echo "<pre>", var_export($user), "</pre>";die();
        $stmt = $connection->prepare(self::$INSERT_QUERY);
        $stmt->bindValue(":USERNAME", $user->getUsername(), PDO::PARAM_STR);
        $stmt->bindValue(":PASSWORD", $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(":EMAIL", $user->getEmail(), PDO::PARAM_STR);
        
        return $stmt->execute();
    }
    
    public static function hasUserRegistration($connection, UsersDto $user){
        $stmt = $connection->prepare(self::$SELECT_BY_EMAIL_QUERY);
        $stmt->bindValue(":EMAIL", $user->getEmail(), PDO::PARAM_STR);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public static function authenticate($connection, UsersDto $user){
       
        $stmt = $connection->prepare(self::$SELECT_QUERY);
        $stmt->bindValue(":EMAIL", $user->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(":PASSWORD", $user->getPassword(), PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        
        // @todo is it correct
        if($row){
            return new UsersDto($row['username'], $row['password'], $row['email']);
        }
        
        return false;   
    }
    
    public static function getUserIdByEmail($connection, $email){
        $stmt = $connection->prepare(self::$SELECT_BY_EMAIL_QUERY);
        $stmt->bindValue(":EMAIL", $email, PDO::PARAM_STR);
        $stmt->execute();
        $user_id = (int)$stmt->fetch(PDO::FETCH_ASSOC)['id'];
        // @todo can you return a sting instead of object
        return $user_id;        
    }
    
}

