<?php
//require_once "./src/lib/Controller.php";
class Errors extends Controller{
    function __construct(){
        parent:: __construct();
        $this->view->render("error/index");
    }
    
}
?>