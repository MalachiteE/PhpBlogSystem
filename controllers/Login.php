<?php session_start();

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
        
        $newUserObj = $userDao->authentication($connection, $userObj);
        
        if($newUserObj){
            $_SESSION['username']=$newUserObj->getUsername();
            $_SESSION['email']=$newUserObj->getEmail();
            header("Location: views/tanks.php");
        }
        else{
            header("Location: index.php");
        }
       
   } 
}

