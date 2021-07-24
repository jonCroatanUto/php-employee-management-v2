<?php

class Employee extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    
    public function renderEmployee(){
        $this->view->render("employee/index");
    }

    public function updateEmployee(){
        //parse_str(file_get_contents("php://input"), $_PUT);
        echo $_POST["firstName"];
        $this->model->updateEmployeeData();
    }
}