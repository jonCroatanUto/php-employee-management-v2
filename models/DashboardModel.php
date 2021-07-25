<?php

  class DashboardModel extends Model{
    
    public function __construct(){
        parent:: __construct();

    }

    public function getAllEmployees(){

      $query = $this->db->connect()->query(GETALL_EMPLOYEES);
      $result = $query->fetchAll(\PDO::FETCH_ASSOC);
      return $result;
      // $conn->close();
      }
      
      public function getEmployeeData($id){
        // echo "insertar";
        $query=$this->db->connect()->query("SELECT * FROM employees WHERE employee_no=$id ");
        $result=$query->fetchAll(\PDO::FETCH_ASSOC);
    
          // while ($row = $query->fetch()) {
          //   $result[] = $row;
          // }
          return $result ;
      
      // $conn->close();
      }
    

      public function insertEmployee($data){
        
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

      }

      public function deleteEmployee($employee_no){

        $query = $this->db->connect()->prepare(DELETE_EMPLOYEE);
        $query->execute(['employee_no' => $employee_no]);
        
      }

    }

?>