<?php
    date_default_timezone_set("Brazil/East");

    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = preg_replace("&/&","",$url['path']);

    $rota = ["contatos", "empresa", "produtos", "servicos"];

    include_once routeValidade($rota, $path);

    function routeValidade($rota, $path) {
        if(in_array($path, $rota)){
            $file = $path;
        }else if($path == ""){
            $file = "home";
        }//fecha else

        if(file_exists("template/{$file}.php")){
            return "template/{$file}.php";
        }else{
            $file = "error/404";
            return "template/{$file}.php";
        }//fecha else

    }// fecha function