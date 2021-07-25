<?php

class Employee extends Controller{
    function __construct(){
        parent::__construct();
    }
    
    
    public function renderEmployee(){
        $this->view->render("employee/index");
    }

    public function updateEmployee(){
        
        if (!empty($_POST)) {
            // print_r($_POST);

            $employee_no        =   $_POST['id'];
            $emp_name           =   $_POST['firstName'];
            $emp_lastName       =   $_POST['lastName'];
            $emp_email          =   $_POST['email'];
            $emp_age            =   $_POST['age'];
            $emp_gender         =   $_POST['gender'];
            $emp_streetAddress  =   $_POST['streetAddress'];
            $emp_city           =   $_POST['city'];
            $emp_state          =   $_POST['state'];
            $emp_postalCode     =   $_POST['postalCode'];
            $emp_phoneNum       =   $_POST['phoneNumber'];

            $this->model->updateEmployeeData([

                'employee_no'       => $employee_no,
                'emp_name'          => $emp_name,
                'emp_lastName'      => $emp_lastName,
                'emp_email'         => $emp_email,
                'emp_age'           => $emp_age,
                'emp_gender'        => $emp_gender,
                'emp_streetAddress' => $emp_streetAddress,
                'emp_city'          => $emp_city,
                'emp_state'         => $emp_state,
                'emp_postalCode'    => $emp_postalCode,
                'emp_phoneNum'      => $emp_phoneNum,
            ]);
            header("Location:".BASE_URL."DashBoard/renderDashboard");
        }
    }
}