<?php

    class Dashboard extends Controller{
        function __construct(){
            parent:: __construct();
            
        }

        public function renderDashboard(){
            $this->view->render("dashboard/index");
        }

        public function getAllEmployees(){

            $result = $this->model->getAllEmployees();
            if($result === null){

                return false;

            } else if(empty($result)){
                
                $_SESSION['error'] = "Error from GET ALL EMPLOYEES is: entry does not exist";
                return false;

            }else{
                echo json_encode($result);
            }
        }

        public function dataEmployee($id){
            $employeeId=(int)$id;
            $_SESSION["employeeData"] = $this->model->getEmployeeData($employeeId);

            if($_SESSION["employeeData"] === null){

                return false;

            } else if(empty($_SESSION["employeeData"])){
                
                $_SESSION['error'] = "Error from GET_EMPLOYEE_BY_ID is: entry does not exist";
                return false;

            }else{

                header("Location:".BASE_URL."Employee/renderEmployee");
            }
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
                
                if($this->model->insertEmployee([
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
                ]) === null){
                    return false;
                }

            }
        }

        public function deleteEmployee($employee_no){
            
            if($this->model->deleteEmployee($employee_no) === null){
                return false;
            }

        }
    }
?>