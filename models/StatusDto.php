<?php

class StatusDto{
    
    private $time;
    private $water_temp;
    private $pump;
    private $heater;
    private $room_temp;
    private $tank_id;
    
    public function __construct($time, $water_temp, $pump, $heater, $room_temp, $tank_id=null){
        $this->setTime($time);
        $this->setWaterTemp($water_temp);
        $this->setPump($pump);
        $this->setHeater($heater);
        $this->setRoomTemp($room_temp);
    }
    
    public function setTime($time){
        $this->time = $time;
    }
    public function getTime(){
        return $this->time;
    }
    
    public function setWaterTemp($water_temp){
        $this->water_temp = $water_temp;
    }
    public function getDescr(){
        return $this->water_temp;
    }
    
    public function setPump($pump){
        $this->pump = $pump;
    }
    public function getPump(){
        return $this->pump;
    }
    
    public function setHeater($heater){
        $this->heater = $heater;
    }
    public function getHeater(){
        return $this->heater;
    }
    
    public function setRoomTemp($room_temp){
        $this->room_temp = $room_temp;
    }
    public function getRoomTemp(){
        return $this->room_temp;
    }
    
    public function setTankId($tank_id){
        $this->tank_id = $tank_id;
    }
    public function getTankId(){
        return $this->tank_id;
    }
    
}

