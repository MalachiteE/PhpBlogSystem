<?php

class Constants{
    
    const MAIN_DIR_PATH = 'http://localhost/PhpBlogSystem/'; 
    
    public static function getMainDirPath(){
        return self::MAIN_DIR_PATH;
    }
    
    public static function getFullPath($path){
        return self::MAIN_DIR_PATH . '/' . $path . '.php';
    }
    
}

