<?php

class Main extends Controller{
    function __construct(){
        parent:: __construct();
        $this->view->render("login/index");
      
    }
    function Hola(){
        echo"<p>hola</p>";
    }

}
?>