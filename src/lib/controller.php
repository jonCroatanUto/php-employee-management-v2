<?php


class Controller{

    function __construct(){
        echo "<h3>base controller</h3>";
        $this->view=new View();
    }

}
?>
