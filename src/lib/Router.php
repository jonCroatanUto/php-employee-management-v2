<?php

require_once "./src/controllers/errors.php";


class Router{
    function __construct(){
        $url=isset($_GET["url"]) ? $_GET['url']:null;
        $url=rtrim($url,"/");
        $url=explode("/",$url);
        if(empty($url[0])){
            $archivoController='./src/controllers/Main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('Main');
            return false;
        }

        $archivoController = "./src/controllers/". $url[0] . '.php';
        
        if (file_exists($archivoController)){
            
            require_once $archivoController;
            
            $controller = new $url[0];
            
            $controller->loadModel($url[0]);

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            $controller=new Errors();
        }         
    }
}