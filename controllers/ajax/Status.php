<?php
include '../../database/DBConnection.php';
include '../../models/StatusDao.php';

$connection = DBConnection::getDBConnection();
echo $states = (new StatusDao)->getAllStatusesByTankId($connection, 1);



