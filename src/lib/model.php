<?php
echo"i'm in";
class ModelEmployees{
   
    function addEmployee($addEmployee){
        return $addEmployee;
    }
    function deleteEmployee($deleteEmployee){
        echo $deleteEmployee;
    }
    function getEmployee($getEmployee){
        echo $getEmployee;
    }
    function updateEmployee($updateEmployee){
       echo $updateEmployee;
    }
}
