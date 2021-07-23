<?php

class Employee extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function renderEmployee(){
        $this->view->render("employee/index");
    }
}