<?php

class File{
    
    private static $path = 'images/uploads/';
    private $max_size = 2097152; // this is in bytes (2MB) and this is upload_max_filesize setting in php.ini
    private static $default_image = '../images/fish.jpg';
            
    public function fileUpload(){
        
        $fileName = $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileSize = $_FILES['img']['size'];
        $fileType = $_FILES['img']['type'];
        $uploadPath = self::$path.$fileName; 

        if(is_bool($this->isUpload($uploadPath, $fileSize, $fileType))){
            if (!move_uploaded_file($fileTmpName, $uploadPath)) {
                return "Sorry, there was an error uploading your file.";
            } 
        }
        
    }
    
    private function isUpload($uploadPath, $fileSize, $fileType){
        
        if (file_exists($uploadPath)) {
            return "Sorry, file already exists.";
        }
        // Check file size
        if ($fileSize > $this->max_size) {
            return "Sorry, your file is too large.";
        }
        // Allow certain file formats
        if($fileType != "image/jpg" && $fileType != "image/png" && $fileType != "image/jpeg" && $fileType != "image/gif" ) {
            return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        
        return true;
    }
    
    public static function getUploadedImage($img, $path){
        return $img && file_exists($path.$img) ? $path.$img : self::$default_image;
    }
    
}

