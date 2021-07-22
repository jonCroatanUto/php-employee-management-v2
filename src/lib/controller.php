<?php


class Controller{

    function __construct(){
        echo "<h3>base controller</h3>";
        $this->view=new View();
    }
    function loadModel($model){
        $url="./src/models/".$model."Model.php";
        
        if(file_exists($url)){
            require_once $url;
           
             
            $modelName=$model."Model";
            $this->model=new $modelName();
           
        } 
    }
}
?>
