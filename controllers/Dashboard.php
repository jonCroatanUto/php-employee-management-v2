<?php

    class Dashboard extends Controller{
        function __construct(){
            parent:: __construct();
            
        }

        function renderDashboard(){
            $this->view->render("dashboard/index");
        }

        function getAllEmployees(){
            echo json_encode($this->model->getAllEmployees());
        }
        public function dataEmployee($id){
            $employeeId=(int)$id;
            session_start();
            $_SESSION["employeeData"]=$this->model->getEmployeeData($employeeId);
            header("Location:".BASE_URL."Employee/renderEmployee");

        }
    }
?>