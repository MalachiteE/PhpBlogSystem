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
    
   public function authenticate($user){
       
        $connection = DBConnection::getDBConnection();
        $userObj = new UsersDto(null, $user['password'], $user['email']);
        
        // @todo is it correct
        $newUserObj = UsersDao::authenticate($connection, $userObj);
        //var_dumP($newUserObj);die();
        
        if($newUserObj){
            $_SESSION['username']=$newUserObj->getUsername();
            $_SESSION['email']=$newUserObj->getEmail();
            if(@$_SESSION['error']){
                unset($_SESSION['error']);
            }
            header("Location: views/tanks.php");
        }
        else{
            //$_SESSION['error'] = "Wrong username or password";
            header("Location: index.php");
        }
       
   } 
}

