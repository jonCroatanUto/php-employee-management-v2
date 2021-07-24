<?php

  class DashboardModel extends Model{
    public function __construct(){
        parent:: __construct();

    }
    public function getAllEmployees(){
        // echo "insertar";
        $query=$this->db->connect()->query(GETALLEMPLOYEES);

        $result=$query->fetchAll(\PDO::FETCH_ASSOC);
    
          // while ($row = $query->fetch()) {
          //   $result[] = $row;
          // }
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
    
    }

?>