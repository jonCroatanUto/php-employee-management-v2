<?php
 class EmployeeModel extends Model{
    public function __construct(){
        parent:: __construct();

    }
    public function updateEmployeeData($updatedData){

        $query = $this->db->connect()->prepare(UPDATE_EMPLOYEE);
        $query->execute([
          'employee_no'       => $updatedData['employee_no'], 
          'emp_name'          => $updatedData['emp_name'], 
          'emp_lastName'      => $updatedData['emp_lastName'], 
          'emp_email'         => $updatedData['emp_email'], 
          'emp_age'           => $updatedData['emp_age'], 
          'emp_streetAddress' => $updatedData['emp_streetAddress'], 
          'emp_city'          => $updatedData['emp_city'], 
          'emp_state'         => $updatedData['emp_state'], 
          'emp_postalCode'    => $updatedData['emp_postalCode'], 
          'emp_phoneNum'      => $updatedData['emp_phoneNum'],
          'emp_gender'        => $updatedData['emp_gender']
        ]);

    }

    public function insertEmployee($insertData){
        $query = $this->db->connect()->prepare(INSERT_EMPLOYEE_EMPLOYEE);
        $query->execute([
          'us_id'             => $insertData['us_id'],
          'emp_name'          => $insertData['emp_name'], 
          'emp_lastName'      => $insertData['emp_lastName'], 
          'emp_email'         => $insertData['emp_email'], 
          'emp_age'           => $insertData['emp_age'], 
          'emp_streetAddress' => $insertData['emp_streetAddress'], 
          'emp_city'          => $insertData['emp_city'], 
          'emp_state'         => $insertData['emp_state'], 
          'emp_postalCode'    => $insertData['emp_postalCode'], 
          'emp_phoneNum'      => $insertData['emp_phoneNum'],
          'emp_gender'        => $insertData['emp_gender']
        ]);

    }
}


