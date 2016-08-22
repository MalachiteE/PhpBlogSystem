<?php

if(isset($_POST)){
    
    var_dump($_POST);die();
    $connection = DBConnection::getDBConnection();
    $query = "INSERT INTO users(username, password, email) VALUES(:USERNAME, :PASSWORD, :EMAIL)";

    $stmt = $connection->prepare($query);
    $stmt->bindValue(":USERNAME", strip_tags($_POST["username"]), PDO::PARAM_STR);
    $stmt->bindValue(":PASSWORD", strip_tags($_POST["password"]), PDO::PARAM_STR);
    $stmt->bindValue(":EMAIL", strip_tags($_POST["email"]), PDO::PARAM_STR);
    $stmt->execute();
    
}

