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
    }

?>