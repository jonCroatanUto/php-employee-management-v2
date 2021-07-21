<?php

require_once "./src/controllers/errors.php";


class Router{
    function __construct(){
        $url= $_GET["url"];
        $url=rtrim($url,"/");
        $url=explode("/",$url);
        

        $archivoController = "./src/controllers/". $url[0] . '.php';
        
        
        if (file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];
            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            $controller=new Errors();
        }         
    }
}