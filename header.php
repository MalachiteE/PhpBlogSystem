<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="http://localhost/PhpBlogSystem/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        
    <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
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

