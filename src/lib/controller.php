<?php
require_once("./src/lib/model.php");
require_once("./src/lib/view.php");
class Controller{


    function employee(){
        $modelEmployees=new ModelEmployees();
        $response=$modelEmployees->addEmployee("Marc Solá");
        if($response=="Marc Solá"){
            
            View::show();
        }

    }  
}

$echoEmpl=new Controller;

$echoEmpl->employee();