<?php

class NewEmpModel extends Model{
  public function __construct(){
      parent:: __construct();

  }
  public function insert(){
      echo "insertar";
      $this->db->connect();
      $sql = "SELECT * FROM questions ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dataQuestions = $row['question'];
        }
        print_r( $dataQuestions);
    } else {
        exit;
    }
    $conn->close();
    }
  }
