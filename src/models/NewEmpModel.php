<?php

class NewEmpModel extends Model{
  public function __construct(){
      parent:: __construct();

  }
  public function insert(){
      echo "insertar";
      $query=$this->db->connect()->query("SELECT * FROM questions ");

   
        while ($row = $query->fetch_assoc()) {
            $dataQuestions = $row['question'];
        }
        print_r( $dataQuestions);
    
    // $conn->close();
    }
  }
