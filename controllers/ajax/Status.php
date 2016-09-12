<?php
include 'database/DBConnection.php';
include 'models/StatusDao.php';

//var_dump($_POST['firstname']);die('ddd');
$connection = DBConnection::getDBConnection();
echo $states = (new StatusDao)->getAllStatusesByTankId($connection, 1);



