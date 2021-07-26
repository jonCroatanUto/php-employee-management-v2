<?php
    session_start();
    require_once('./config/constants.php');  

    class SessionHelper extends Controller{
        
        public function __construct(){
            parent::__construct();
        }

        public function logout(){
            unset($_SESSION['userId']);
            session_unset();
            session_destroy();
            setcookie(session_name(), "", time() - 3600);
            http_response_code(200);
            header("Location:".BASE_URL);
        }
        public function checkTimeout(){
            
            if (isset($_SESSION['userId'])){  
                //echo time() - $_SESSION['time'];         
             if (time() - $_SESSION['time'] > 600) {
                unset($_SESSION['userId']);
                session_unset();
                session_destroy();
                setcookie(session_name(), "", time() - 3600);
                echo "Logout"; 
                
                }
            }
        }
   }
            // $this->logout();
            //     } else {
            //         $url = $_SERVER['REQUEST_URI'];
            //         if (str_contains($url, 'index.php')) {
            //             header('Location: ./src/dashboard.php');
            //         }
            //     }
            // } else {
            //     goLogin();
?>