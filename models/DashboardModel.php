<?php

  class DashboardModel extends Model{
    
    public function __construct(){
        parent:: __construct();

    }

    public function getAllEmployees(){

        try {

          $query = $this->db->connect()->query(GETALL_EMPLOYEES);
          $result = $query->fetchAll(\PDO::FETCH_ASSOC);
          return $result;

        }catch(\PDOException $e){
          $_SESSION['error'] = "Error from GET ALL EMPLOYEES is:\n ".$e;
          return null;
        }

      }
      
      public function getEmployeeData($id){

        try{

          $query = $this->db->connect()->prepare(GET_EMPLOYEE_BY_ID);
          $query->execute(["employee_no" => $id]);
          $result = $query->fetchAll(\PDO::FETCH_ASSOC);
          return $result ;

        }catch(\PDOException $e){
          $_SESSION['error'] = "Error from GET EMPLOYEE BY ID is:\n ".$e;
          return null;
        }
        
      }
    

      public function insertEmployee($data){
        
        try{

          $query = $this->db->connect()->prepare(INSERT_EMPLOYEE_DASHBOARD);
          $query->execute([
            'us_id'             => $data['us_id'],
            'emp_name'          => $data['emp_name'], 
            'emp_lastName'      => $data['emp_lastName'], 
            'emp_email'         => $data['emp_email'], 
            'emp_age'           => $data['emp_age'], 
            'emp_streetAddress' => $data['emp_streetAddress'], 
            'emp_city'          => $data['emp_city'], 
            'emp_state'         => $data['emp_state'], 
            'emp_postalCode'    => $data['emp_postalCode'], 
            'emp_phoneNum'      => $data['emp_phoneNum']
          ]);

        }catch(\PDOException $e){
          $_SESSION['error'] = "Error from INSERT EMPLOYEE DASHBOARD is:\n ".$e;
          return null;
        }

      }

      public function deleteEmployee($employee_no){

        try{

          $query = $this->db->connect()->prepare(DELETE_EMPLOYEE);
          $query->execute(['employee_no' => $employee_no]);

        }catch(\PDOException $e){
          $_SESSION['error'] = "Error from DELETE EMPLOYEE  is:\n ".$e;
          return null;
        }
        
      }

    }

?>