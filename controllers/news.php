<?php
    
    class News extends Controller{
        
        function __construct(){
            parent::__construct();
            $this->view->render('news/index');
            // echo "new main controller";
        }

        public function insertNewStudent(){

            $this->model->insert();
            echo "Student added to the database<br>";
        }
    }

?>