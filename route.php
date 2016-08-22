<?php
require 'controllers/'.$_GET['module'].'.php';

if($_POST){
    $module = $_GET['module'];
    $method = $_GET['method'];
    if($module && $method){
        (new $module())->$method($_POST);
    }
}

