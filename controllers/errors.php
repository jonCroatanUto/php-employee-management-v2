<?php
//require_once "./src/lib/Controller.php";
class Errors extends Controller{
    function __construct($message){
        parent:: __construct();
        $this->view->message = $message;
        $this->view->render("error/index");
    }
    
}
?>