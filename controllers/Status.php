<?php
//function __autoload($class_name){
//    // @todo must be function
//    if(file_exists('models/'.$class_name. '.php')){
//        include 'models/'.$class_name. '.php';
//    }
//    elseif(file_exists('database/'.$class_name. '.php')){
//        include 'database/'.$class_name. '.php';
//    }
//    elseif(file_exists('controllers/'.$class_name. '.php')){
//        include 'controllers/'.$class_name. '.php';
//    }
//    else{
//       include $class_name. '.php'; 
//    }   
//}

class Status{
      
    public function insert($status){
        $connection = DBConnection::getDBConnection();
        $statusObj = new StatusDto($status['time'],$status['water_temp'],$status['pump'],$status['heater'],$status['room_temp']);
        
        StatusDao::insert($connection, $statusObj);
        die();    
    }
    
    public function getStatusesByTankId($tank_id){
        $connection = DBConnection::getDBConnection();
        return StatusDao::getStatusesByTankId($connection,$tank_id);       
    }
    
    public function getCurrentStatusByTankId($tank_id){
        $connection = DBConnection::getDBConnection();
        return StatusDao::getCurrentStatusByTankId($connection,$tank_id);       
    }
    
    //public static function testGraphic(){
    //    $statuses=self::getStatusesByTankId($_GET['id']);
        //var_dump($statuses);die();
    //}
    
}

