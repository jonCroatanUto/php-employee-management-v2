<?php
class Login extends Controller{
   function __construct(){
        parent::__construct();
        $this->view->render("nuevo/index");
        
    }
    function registroEmployee(){
        echo "nuevo employee";
        
        $this->model->insert();
    }
}