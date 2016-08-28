<?php

class TankDto{
    
    private $name;
    private $descr;
    private $img;
    private $user_id;
    
    
    public function __construct($name, $descr, $img, $userId=null){
        $this->setName($name);
        $this->setDescr($descr);
        $this->setImg($img);
        $this->setUserId($userId);
    }
    
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    
    public function setDescr($descr){
        $this->descr = $descr;
    }
    public function getDescr(){
        return $this->descr;
    }
    
    public function setImg($img){
        $this->img = $img;
    }
    public function getImg(){
        return $this->img;
    }
    
    public function setUserId($userId){
        $this->user_id = $userId;
    }
    public function getUserId(){
        return $this->user_id;
    }
    
}

