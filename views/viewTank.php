<?php session_start() ?>

<?php
// @todo must be in controllers
require '../controllers/Tank.php';
require '../database/DBConnection.php';
require '../models/TankDao.php';
require '../models/TankDto.php';
require '../models/UsersDao.php';
require '../controllers/Status.php';
require '../models/StatusDao.php';
require '../models/StatusDto.php';

$tank = Tank::getTankInformationById();
$currentStatus = Status::getCurrentStatusByTankId($tank->getId());


if(!$_SESSION){
    header("Location: ../index.php");
}

?>

<?php include realpath('../header.php') ?>

<?php
    include '_breadcrumbs.php';
    $nav = [[ 'url'=>'tanks.php', 'name'=>'Tanks' ], [ 'url'=>'viewTank.php?id='.$tank->getId(), 'name'=>$tank->getName() ]];
    breadcrumbs($nav); 
?>

<div class="Tank row">
      
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

<?php include realpath('../footer.php') ?>
