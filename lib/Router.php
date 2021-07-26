<?php

require_once "./controllers/errors.php";

session_start();
class Router{

    function __construct(){

        $url=isset($_GET["url"]) ? $_GET['url'] : null;
        $url=rtrim($url,"/");
        $url=explode("/",$url);
        //echo $url[0]."esta es la url 0";
        // Create default controller (Main) to render default view (main view)
        
        if(empty($url[0])){
            $archivoController='./controllers/Main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('Main');
            return false;
        }

        $archivoController = "./controllers/". $url[0] . '.php';
        
        if (file_exists($archivoController)){
            
            require_once $archivoController;
            
            $controller = new $url[0];
            
            $controller->loadModel($url[0]);

            // Checking url number of params
            $nParams = sizeof($url);

            // function with no params
            if($nParams === 2){

                if($controller->{$url[1]}() === false){
                    echo "I'm in failed function execution";
                    if(isset($_SESSION['error'])){
                        $controller = new Errors($_SESSION['error']);
                        unset($_SESSION['error']);
                    }
                }
            
            // function with just 1 param
            }else if($nParams === 3){

                if($controller->{$url[1]}($url[2]) === false){
                    if(isset($_SESSION['error'])){
                        $controller = new Errors($_SESSION['error']);
                        unset($_SESSION['error']);
                    }
                }

            
            // function with multiple params
            }else if($nParams > 3){
                
                $params = array();
                for($i = 2; $i < $nParams; $i++){
                    array_push($params, $url[$i]);
                }
                
                if($controller->{$url[1]}($params) === false){
                    if(isset($_SESSION['error'])){
                        $controller = new Errors($_SESSION['error']);
                        unset($_SESSION['error']);
                    }
                }
            }
            
        }else{
            $controller = new Errors("Route error");
        }         
    }
}