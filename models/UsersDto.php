<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class UsersDto{
     
    private $id;
    private $username;
    private $password;
    private $email;
    
function __construct($username, $password, $email) {
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setEmail($email);
    }
    
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    
    public function setUsername($username){
        $this->username = strip_tags($username);
    }
    public function getUsername(){
        return $this->username;
    }
    
    public function setPassword($password){
        $this->password = md5(strip_tags($password));
    }
    public function getPassword(){
        return $this->password;
    }
    
    public function setEmail($email){
        $this->email = strip_tags($email);
    }
    public function getEmail(){
        return $this->email;
    }
    
}
