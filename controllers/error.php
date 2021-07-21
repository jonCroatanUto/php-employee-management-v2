<?php

    class Error1 extends Controller{

        function __construct() {
            parent::__construct();
            $this->view->errorMessage = "There was some issue when trying to load the resource";
            $this->view->render('error/index');
            // echo "<p>Something went wrong when trying to load resource</p>";
        }
    }
?>