<?php
class NewEmp extends Controller{
   function __construct(){
        parent::__construct();
        $this->view->render("nuevo/index");
        
    }
    function registroEmpoyee(){
        echo "nuevo employee";
        
        $this->model->insert();
    }
}