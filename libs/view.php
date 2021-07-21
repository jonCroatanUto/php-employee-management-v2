<?php
    
    class View{
        function __construct() {
            // echo "<p> new base view</p>";
        }

        function render($name){
            require "views/".$name.".php";
        }
    }

?>