<?php

class Employee extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    public function dataEmployee($id){
        $employeeId=(int)$id;
        
       
        echo json_encode( $this->model->getEmployeeData($employeeId));
    }
    public function renderEmployee(){
        $this->view->render("employee/index");
    }
}