<?php

class File{
    
    private static $uploded_file_path = '../images/uploads/'; // path for files which have already uploaded
    private static $path = 'images/uploads/'; //path for files which will be uploaded 
    private $max_size = 2097152; // this is in bytes (2MB) and this is upload_max_filesize setting in php.ini
    private static $default_image = '../images/fish.jpg';
            
    public function uploadFile(){
        
        $fileName = $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileSize = $_FILES['img']['size'];
        $fileType = $_FILES['img']['type'];
        $uploadPath = self::$path.$fileName; 

        if(is_bool($this->isUploaded($uploadPath, $fileSize, $fileType))){
            //var_dump($uploadPath, $fileSize, $fileType);die('deded');
            if (!move_uploaded_file($fileTmpName, $uploadPath)) {
                return "Sorry, there was an error uploading your file.";
            } 
        }
        
    }
    
    private function isUploaded($uploadPath, $fileSize, $fileType){
        
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
    
    public static function getUploadedImage($img, $path=null){
        if(!$path){
          $path = self::$uploded_file_path;  
        }
        
        return $img && file_exists($path.$img) ? $path.$img : self::$default_image;
    }
    
}

