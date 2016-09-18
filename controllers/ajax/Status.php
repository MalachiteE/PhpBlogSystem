<?php
include '../../database/DBConnection.php';
include '../../models/StatusDao.php';

$connection = DBConnection::getDBConnection();
echo $states = StatusDao::getStatusesByTankId($connection, $_GET['id']);



