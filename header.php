<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="http://localhost/PhpBlogSystem/stylesheets/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
   
    <nav class="Navigation" style="background-color: #333"> 
        <div class="row nav-wrapper">
          <a href="#" class="brand-logo">DenZy</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
            //var_dump($_SERVER,strpos($_SERVER['PHP_SELF'], 'tanks.php'));die();
            if(strpos($_SERVER['PHP_SELF'], 'tanks.php')):   
            ?>
              <a href="http://localhost/PhpBlogSystem/views/addTank.php" class="waves-effect waves-light btn">Add tank</a>
            <?php 
            endif; ?>
            <?php
            if(@$_SESSION): ?>
                <li>Hello, <?= $_SESSION['email'] ?></li>
            <?php
            else: ?>
                <li><a href="http://localhost/PhpBlogSystem/views/registration.php">Register</a></li>
            <?php 
            endif; ?>
          </ul>
        </div>
    </nav>
    
    <div class="row"> 
        
        <div class="MainContainer"> <!-- main container -->
