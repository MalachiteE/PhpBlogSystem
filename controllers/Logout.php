<?php session_start(); 

class Logout{
    
    public function logout() {
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
    
}

