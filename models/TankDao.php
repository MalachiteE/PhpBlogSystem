<?php

class TankDao{
    
    private static $INSERT_QUERY = "INSERT INTO tank(name, user_id, descr, img) VALUES(:NAME, :USER_ID, :DESCR, :IMG )";
    private static $SELECT_BY_USER_ID_QUERY = 'SELECT id, name, descr, img FROM tank WHERE user_id=:USER_ID';
    private static $SELECT_BY_ID_QUERY = 'SELECT id, name, descr, img FROM tank WHERE id=:ID';
    private static $DELETE_BY_ID_QUERY = 'DELETE FROM tank WHERE id=:ID';
    
    
    public function insert($connection, TankDto $tank){
        // @todo must be a new function
        $stmt = $connection->prepare(self::$INSERT_QUERY);
        $stmt->bindValue(":NAME", $tank->getName(), PDO::PARAM_STR);
        $stmt->bindValue(":USER_ID", $tank->getUserId(), PDO::PARAM_INT); 
        $stmt->bindValue(":DESCR", $tank->getDescr(), PDO::PARAM_STR);
        $stmt->bindValue(":IMG", $tank->getImg(), PDO::PARAM_STR);
        
        return $stmt->execute();
    }
    
    public function getTanksByUserId($connection){
        // @todo can you return a sting instead of object 
        $userId = (new UsersDao)->getUserIdByEmail($connection);
        $stmt = $connection->prepare(self::$SELECT_BY_USER_ID_QUERY);
        $stmt->bindValue(":USER_ID", $userId, PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $listObjects = [];
        foreach ($rows as $row){
            $listObjects[] = new TankDto($row['name'],$row['descr'],$row['img'],$userId,$row['id']);
        }
        
        return $listObjects;
    }
    
    public function getTankInformationById($connection, $id){
        $userId = (new UsersDao)->getUserIdByEmail($connection);
        $stmt = $connection->prepare(self::$SELECT_BY_ID_QUERY);
        $stmt->bindValue(":ID", $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();
        
        return new TankDto($row['name'],$row['descr'],$row['img'],$userId,$row['id']);
    }
    
    public function removeTankById($connection, $id){
        $stmt = $connection->prepare(self::$DELETE_BY_ID_QUERY);
        $stmt->bindValue(":ID", $id, PDO::PARAM_INT);
        
        return $stmt->execute();
    }
    
}

