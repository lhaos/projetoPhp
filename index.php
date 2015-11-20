<?php
    date_default_timezone_set("Brazil/East");

    $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = str_replace("/","",$rota['path']);

    $url = ["contatos", "empresa", "produtos", "servicos"];

    if(isset($_GET['file'])){
        $file = $_GET['file'];
    } else if($path == "" || $file != $_GET['file']){
        $file = "home";
    }//fecha else

    if($path == $url[0] || $path == $url[1] || $path == $url[2] || $path == $url[3]){
        $file = $path;
    }else if($file != "home" && $file != $path && $file != $_GET['file'] ){
        $file = "error/404";
    }//fecha else

    if(file_exists("template/{$file}.php")){
        include_once "template/{$file}.php";
    }else{
        $file = "error/404";
        include_once "template/{$file}.php";
    }//fecha else