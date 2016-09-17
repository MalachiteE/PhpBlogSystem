<?php
require 'controllers/'.$_GET['module'].'.php';
$module = $_GET['module'];
$method = $_GET['method'];


if($module && $method){
    if($_POST){
        (new $module())->$method($_POST);
    }
    elseif($_GET){
        (new $module())->$method();
    }     
}
