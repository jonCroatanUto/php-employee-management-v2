<?php
    require_once "./controllers/error.php";
    class App{

        function __construct() {
            // echo "<p>new app</p>";

            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url,"/");
            $url = explode("/",$url);

            // var_dump($url);

            if(empty($url[0])){
                
                $controllerFile = 'controllers/main.php';
                require_once $controllerFile;
                $controller = new Main();
                $controller->loadModel('main');
                return false;
            }

            $controllerFile = 'controllers/'.$url[0].'.php';

            if(file_exists($controllerFile)){

                require_once $controllerFile;
                $controller = new $url[0];
                $controller->loadModel($url[0]);

                if(isset($url[1])){
                    $controller->{$url[1]}();
                }
            }else{
                $controller = new Error1();
            }

        }
    }
?>