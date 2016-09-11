<?php

// @todo must be in controllers
require '../controllers/Tank.php';
require '../database/DBConnection.php';
require '../models/TankDao.php';
require '../models/UsersDao.php';
require '../models/TankDto.php';
$tanks = Tank::getTanksByUserId();

session_start();
if(!$_SESSION){
    header("Location: http://localhost/PhpBlogSystem/views/login.php");
}
?>

<?php include Constants::getFullPath('header') ?>
<!--<div class="">
    <div class="col s12 center">
        <a href="http://localhost/PhpBlogSystem/views/addTank.php" class="waves-effect waves-light btn">Add tank</a>
    </div>
</div>-->

<div class="Tanks row">
    <?php 
    foreach ($tanks as $tank): ?>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="<?= File::getUploadedImage($tank->getImg(), '../images/uploads/')?>" height="270">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4"><?= $tank->getName(); ?><i class="material-icons right">more_vert</i></span>
                  <p><a href="<?= Constants::getFullPath('views/viewTank').'?id='.$tank->getId()?>">view more details</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4"><?= $tank->getName(); ?><i class="material-icons right">close</i></span>
                  <p><?= $tank->getDescr() ? $tank->getDescr(): 'No description'; ?></p>
                </div>
            </div>
        </div>
    <?php 
    endforeach; ?>
</div>

<?php include Constants::getFullPath('footer') ?>