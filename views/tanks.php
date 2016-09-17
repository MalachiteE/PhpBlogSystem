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

<?php include Constants::getFullPath('header')
 // @todo add tank must be moved somewhere else       
?>

<div class="row" style="margin-bottom: 0">
    <div class="right" style="padding: 20px 27px 0 27px">
        <a href="http://localhost/PhpBlogSystem/views/addTank.php" class="waves-effect waves-light btn">Add tank</a>
    </div>
</div>


<div class="Tanks row">
    <?php 
    foreach ($tanks as $tank): ?>
        <div class="col s12 m6 l4" data-hide-deleted-tank-<?= $tank->getId()?> >
            <div class="card">
                
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="<?= Constants::getFullPath('views/viewTank').'?id='.$tank->getId()?>">
                        <img src="<?= File::getUploadedImage($tank->getImg(), '../images/uploads/')?>" height="270">
                    </a>
                </div>
                
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?= $tank->getName(); ?><i class="material-icons right">more_vert</i></span>
                    <p>
                        <a class="Tanks__delete-btn waves-effect waves-light btn modal-trigger" href="<?= Constants::getFullPath('views/viewTank').'?id='.$tank->getId()?>">open</a>
                        <a class="Tanks__delete-btn waves-effect waves-light btn modal-trigger" href="#tank<?= $tank->getId()?>">delete</a>
                    </p>
                    
                    <div id="tank<?= $tank->getId()?>" class="modal">
                        <div class="Tanks__modal-header modal-content">
                            <h5 class="center">Are you sure that you want to delete <?= $tank->getName(); ?> tank?</h5>
                        </div>
                        <div class="Tanks__modal-footer">
                            <a href="<?= Constants::getFullPath('controllers/ajax/Tank') ?>" data-delete-tank data-id="<?= $tank->getId()?>" 
                               class="Tanks__modal-agree-btn modal-action waves-effect waves-green btn-flat">Yes</a>
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">No</a>
                        </div>
                    </div>
                </div>
                
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4"><?= $tank->getName(); ?><i class="material-icons right">close</i></span>
                  <p><?= $tank->getDescr() ? $tank->getDescr(): 'No description'; ?></p>
                </div>
                
            </div>
        </div>
        <!-- Modal Trigger -->
        
        <!-- Modal Structure -->
        
    <?php 
    endforeach; ?>
</div>

<?php include Constants::getFullPath('footer') ?>