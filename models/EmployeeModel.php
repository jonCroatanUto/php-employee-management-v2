<?php
 class EmployeeModel extends Model{
    public function __construct(){
        parent:: __construct();

    }
    public function updateEmployeeData($array){
        print_r( $array);

    }
}

