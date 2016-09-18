<?php session_start() ?>

<?php include __DIR__ . '\header.php' ?>
    
    <?php
    if(empty(@$_SESSION)){ 
        include __DIR__ . '\views\login.php'; 
    }
    else{
        header("Location: views/tanks.php");
    }  
    ?>
    
    
<?php include __DIR__ . '\footer.php' ?>
        
      
