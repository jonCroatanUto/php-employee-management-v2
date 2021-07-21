<?php
class View{

    function __construct(){
      echo "<h3>Base Veiw</h3>"; 
    }
     function render($nombre){
         require "./view/".$nombre.".php";
     }
}
?>








