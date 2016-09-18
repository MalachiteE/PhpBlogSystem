<?php

function __autoload($class_name){
    // @todo must be function
    if(file_exists('models/'.$class_name. '.php')){
        include 'models/'.$class_name. '.php';
    }
    elseif(file_exists('database/'.$class_name. '.php')){
        include 'database/'.$class_name. '.php';
    }
    elseif(file_exists('controllers/'.$class_name. '.php')){
        include 'controllers/'.$class_name. '.php';
    }
    else{
       include $class_name. '.php'; 
    }   
}

class Registration{
    
    public function insert($user){
        $connection = DBConnection::getDBConnection();
        $userObj = new UsersDto($user["username"], $user["password"], $user["email"]);
        //echo "<pre>", var_dump($user["username"],$userObj), "</pre>";die();
        if($this->hasUserRegistration($connection, $userObj) || ($user["password"] != $user["repeat_password"])){
            header("Location: views/registration.php");
        }
        else{
            $isExecuted = UsersDao::insert($connection, $userObj);
            
            if($isExecuted){
                header("Location: index.php");
            }
            else{
                header("Location: views/registration.php");  
            }
            
        }
        
    }
    
    private function hasUserRegistration($connection, $userObj){       
        return UsersDao::hasUserRegistration($connection, $userObj);       
    }
    
}
