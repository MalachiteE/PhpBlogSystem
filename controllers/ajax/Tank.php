<?php
include '../../database/DBConnection.php';
include '../../models/TankDao.php';

$connection = DBConnection::getDBConnection();
echo (new TankDao)->removeTankById($connection, $_POST['id']);
