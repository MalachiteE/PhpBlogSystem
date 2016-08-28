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

class Login{
    
   public function authentication($user){
       
        $connection = DBConnection::getDBConnection();
        $userObj = new UsersDto(null, $user['password'], $user['email']);
        $userDao = new UsersDao();
        
        $hasLogin = $userDao->authentication($connection, $userObj);
        
        if($hasLogin){
            session_start();
            $_SESSION['email']=$userObj->getEmail();
            header("Location: http://localhost/PhpBlogSystem/views/tanks.php");
        }
        else{
            header("Location: http://localhost/PhpBlogSystem/views/login.php");
        }
       
   } 
}

