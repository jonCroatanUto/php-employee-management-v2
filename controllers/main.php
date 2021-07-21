<?php
    
    class Main extends Controller{
        
        function __construct(){
            parent::__construct();
            $this->view->render('main/index');
            // echo "new main controller";
        }

        function greeting(){
            echo "<p>I greet you</p>";
        }
    }

?>