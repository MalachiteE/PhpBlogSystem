<?php

// @todo must be in controllers
require '../database/DBConnection.php';
require '../controllers/Tank.php';
require '../models/TankDao.php';
require '../models/TankDto.php';
require '../models/UsersDao.php';
require '../controllers/Status.php';
require '../models/StatusDao.php';
require '../models/StatusDto.php';

$tank = Tank::getTankInformationById();
$currentStatus = Status::getCurrentStatusByTankId($tank->getId());

session_start();
if(!$_SESSION){
    header("Location: http://localhost/PhpBlogSystem/views/login.php");
}

include 'http://localhost/PhpBlogSystem/header.php';


?>

<div class="Tank row">
    
    <nav class="Breadcrumbs">
        <div class="col s12">
            <a href="<?= Constants::getFullPath('views/tanks') ?>" class="breadcrumb">Tanks</a>
            <a href="<?= Constants::getFullPath('views/viewTank').'?id='.$tank->getId()?>" class="breadcrumb"><?= $tank->getName()?></a>
        </div>
    </nav>
    
    <div class="col s12">
        <h4 style="margin-bottom: 40px"><?= $tank->getName()?></h4>
    </div>
    <div class="col s12 m6">
        <img class="materialboxed" height="400" src="<?= File::getUploadedImage($tank->getImg(), '../images/uploads/') ?>">
    </div>
    <?php 
    if($tank->getDescr()): ?>
        <div class="col s12 m6">
            <h5>Description</h5>
            <p><?= $tank->getDescr()?></p>  
        </div>
    <?php
    endif; ?>
    <div class="col s12">
        <h4 style="margin-bottom: 40px">Current state</h4>
        <div id="chart-container">
            <canvas id="mycanvas"></canvas>
        </div>
    </div>
     
</div>

<?php include 'http://localhost/PhpBlogSystem/footer.php' ?>
