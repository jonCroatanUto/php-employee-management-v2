<?php
    
    class Request extends Controller{
        
        function __construct(){
            parent::__construct();
            $this->view->render('request/index');
            // echo "new main controller";
        }

    }

?>