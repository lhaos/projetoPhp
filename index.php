<?php
    date_default_timezone_set("Brazil/East");

    if(isset($_GET['file'])){
        $file = $_GET['file'];
    }else{
        $file = "home";
    }//fecha else

    if(file_exists("template/{$file}.php")){
        include_once "template/{$file}.php";
    }else{
        include_once "template/error/404.php";
    }//fecha else