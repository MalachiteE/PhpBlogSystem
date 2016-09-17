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

class Tank{
      
    public function insert($tank){
        $connection = DBConnection::getDBConnection();
        $userId = (new UsersDao)->getUserIdByEmail($connection);
        //var_dump($_FILES['img']['name']);die();
        $tankObj = new TankDto($tank['name'], $tank['descr'], $_FILES['img']['name'], $userId);
        $tankDao = new TankDao();
        
        // @todo must show in form 
        $errorMessage = (new File)->fileUpload();
        
        if($tankDao->insert($connection, $tankObj)){
            header("Location: http://localhost/PhpBlogSystem/views/tanks.php");
        }
        else{
            header("Location: http://localhost/PhpBlogSystem/views/addTank.php");
        }
        
    }
    
    public static function getTanksByUserId(){
        $connection = DBConnection::getDBConnection();
        return (new TankDao)->getTanksByUserId($connection);       
    }
    
    public static function getTankInformationById(){
        $connection = DBConnection::getDBConnection();
        return (new TankDao)->getTankInformationById($connection,$_GET['id']);       
    }
    
}

