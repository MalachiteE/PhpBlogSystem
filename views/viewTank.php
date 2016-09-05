<?php

// @todo must be in controllers
require '../controllers/Tank.php';
require '../database/DBConnection.php';
require '../models/TankDao.php';
require '../models/UsersDao.php';
require '../models/TankDto.php';
$tank = Tank::getTankInformationById();

session_start();
if(!$_SESSION){
    header("Location: http://localhost/PhpBlogSystem/views/login.php");
}
include 'http://localhost/PhpBlogSystem/header.php';
?>

<div class="row">
    <div class="col s12">
        <h4><?= $tank->getName()?></h4>
    </div>
    <div class="col s12 m6">
        <img class="materialboxed" width="650" src="<?= File::getUploadedImage($tank->getImg(), '../images/uploads/') ?>">
    </div>
    <div class="col s12 m6">
        
    </div>
</div>

<?php include 'http://localhost/PhpBlogSystem/footer.php' ?>
