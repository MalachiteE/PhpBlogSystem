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
        //echo "<pre>", var_dump($user["username"],$userObj), "</pre>";die();

        $hasLogin = $userDao->authentication($connection, $userObj);
        
        if($hasLogin){
            header("Location: http://localhost/PhpBlogSystem/index.php");
        }
        else{
            header("Location: http://localhost/PhpBlogSystem/views/registration.php");
        }
       
   } 
}

