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
          <a href="http://localhost/PhpBlogSystem/index.php" class="brand-logo">DenZy</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php
//            if(strpos($_SERVER['REQUEST_URI'], 'tanks.php')):   
              ?> 
                <?php 
//            endif; ?>  
            <?php
            if(@$_SESSION): ?>
                <li>Hello, <?= @$_SESSION['username'] ?></li>
                <li><a href="../route.php?module=Logout&method=logout"><i class="tiny material-icons">input</i></a></li>
                <?php 
            endif; ?>
          </ul>
        </div>
    </nav>
    
    <div class="row"> 
        
        <div class="MainContainer"> <!-- main container -->
            <?php //phpinfo();
            //if(strpos($_SERVER['REQUEST_URI'], 'views') && !strpos($_SERVER['REQUEST_URI'], '_')){ ?>
