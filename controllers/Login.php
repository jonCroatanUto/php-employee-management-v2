<?php
class Login extends Controller{
   function __construct(){
        parent::__construct();
        
        
    }
    function userLogin(){
       
        $user=$_POST["user"];
        $password=$_POST["password"];
        $users= $this->model->getUsers();
        $isUser=$this->model->getUserData($user,$users);
       

        if(!$isUser==""){    
                        
           $this->model->checkUserPass($password,$users,$isUser);
            if(isset($_SESSION['userId'])){
                
                header("Location:".BASE_URL."Dashboard/renderDashboard");
            }else{
                $this->view->render("login/index");
                echo "error";
            } 
        }else{
            $this->view->render("login/index");
                echo "error";
        }
    }
}
