<?php

    class Dashboard extends Controller{
        function __construct(){
            parent:: __construct();
            
        }

        public function renderDashboard(){
            $this->view->render("dashboard/index");
        }

        public function getAllEmployees(){
            echo json_encode($this->model->getAllEmployees());
        }
        
        public function dataEmployee($id){
            $employeeId=(int)$id;
            session_start();
            $_SESSION["employeeData"]=$this->model->getEmployeeData($employeeId);
            header("Location:".BASE_URL."Employee/renderEmployee");
        }

        public function getEmployeeById($employee_no){
            
            session_start();
            $_SESSION['employee'] = $this->model->getEmployeeById($employee_no);
            header("Location:".BASE_URL."Employee");

        }

        public function insertEmployee(){
            
            if (!empty($_POST)) {

                $us_id              =   $_POST['us_id'];
                $emp_name           =   $_POST['emp_name'];
                $emp_lastName       =   $_POST['emp_lastName'];
                $emp_email          =   $_POST['emp_email'];
                $emp_age            =   $_POST['emp_age'];
                $emp_streetAddress  =   $_POST['emp_streetAddress'];
                $emp_city           =   $_POST['emp_city'];
                $emp_state          =   $_POST['emp_state'];
                $emp_postalCode     =   $_POST['emp_postalCode'];
                $emp_phoneNum       =   $_POST['emp_phoneNum'];
                
                $this->model->insertEmployee([
                    'us_id'             => $us_id,
                    'emp_name'          => $emp_name,
                    'emp_lastName'      => $emp_lastName,
                    'emp_email'         => $emp_email,
                    'emp_age'           => $emp_age,
                    'emp_streetAddress' => $emp_streetAddress,
                    'emp_city'          => $emp_city,
                    'emp_state'         => $emp_state,
                    'emp_postalCode'    => $emp_postalCode,
                    'emp_phoneNum'      => $emp_phoneNum,
                ]);

            }
        }

        public function deleteEmployee($employee_no){
            
            $this->model->deleteEmployee($employee_no);

        }
    }
?>