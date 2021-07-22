<?php

class LoginModel extends Model{
  public function __construct(){
      parent:: __construct();

  }
  public function insert(){
      // echo "insertar";
      $query=$this->db->connect()->query("SELECT * FROM employees");

   
        while ($row = $query->fetch()) {
            $dataQuestions[] = $row['emp_no'];
        }
        print_r($dataQuestions);
    
    // $conn->close();
    }
  }
