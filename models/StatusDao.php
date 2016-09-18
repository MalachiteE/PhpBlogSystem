<?php

class StatusDao{
    
    private static $INSERT_QUERY = "INSERT INTO status(time, water_temp, pump, heater, room_temp, tank_id) VALUES(:TIME, :WATER_TEMP, :PUMP, :HEATER, :ROOM_TEMP, :TANK_ID)";
    private static $SELECT_CURRENT_STATUS_BY_TANK_ID_QUERY = 'SELECT time, water_temp, pump, heater, room_temp FROM status WHERE tank_id=:TANK_ID ORDER BY id DESC LIMIT 1';
    private static $SELECT_STATUSES_BY_TANK_ID_QUERY = 'SELECT time, water_temp, room_temp FROM status WHERE tank_id=:TANK_ID ORDER BY time';

    
    public static function insert($connection, TankDto $tank){
        // @todo must be a new function
        $stmt = $connection->prepare(self::$INSERT_QUERY);
        $stmt->bindValue(":TIME", $tank->getName(), PDO::PARAM_STR);
        $stmt->bindValue(":WATER_TEMP", $tank->getUserId(), PDO::PARAM_STR); 
        $stmt->bindValue(":PUMP", $tank->getDescr(), PDO::PARAM_STR);
        $stmt->bindValue(":HEATER", $tank->getImg(), PDO::PARAM_STR);
        $stmt->bindValue(":ROOM_TEMP", $tank->getImg(), PDO::PARAM_STR);
        $stmt->bindValue(":TANK_ID", $tank->getImg(), PDO::PARAM_INT);
        
        return $stmt->execute();
    }
    
    public static function getStatusesByTankId($connection, $tankId){
        // @todo can you return a sting instead of object 
        $stmt = $connection->prepare(self::$SELECT_STATUSES_BY_TANK_ID_QUERY);
        $stmt->bindValue(":TANK_ID", $tankId, PDO::PARAM_INT);
        $stmt->execute();
        
        // this is for chart.js
        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        
//        $listStatuses = [];
//        foreach ($rows as $row){
//            $listStatuses[] = new StatusDto($row['time'],$row['water_temp'],$row['pump'],$row['heater'],$row['room_temp'],$tankId);
//        }
//        
        //return $listStatuses;
    }
    
    public static function getCurrentStatusByTankId($connection, $tank_id){
        $stmt = $connection->prepare(self::$SELECT_CURRENT_STATUS_BY_TANK_ID_QUERY);
        $stmt->bindValue(":TANK_ID", $tank_id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();
        
        return new TankDto($row['time'],$row['water_temp'],$row['pump'],$row['heater'],$row['room_temp']);
    }
    
}


