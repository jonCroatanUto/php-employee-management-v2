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

    }
?>