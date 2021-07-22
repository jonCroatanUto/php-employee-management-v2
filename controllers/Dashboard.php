<?php

class Dashboard extends Controller{
    function __construct(){
        parent:: __construct();
        $this->view->render("dashboard/index");
      
    }
    function getAllEmployees(){
        print_r($this->model->getAllEmployees());
    }

}
?>