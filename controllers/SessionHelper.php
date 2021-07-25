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
            // $this->view->render("login/index");
            // header("Location:".BASE_URL);
            http_response_code(200);
        }

        public function checkTimeout(){
            // echo "I'm in checkTimeout <br>";
            // echo $_SESSION['time'];
            // echo "time that passed isnce login is = ".(time() - $_SESSION['time']);
            if (isset($_SESSION['userId'])) {
                if (time() - $_SESSION['time'] >= 5) {
                    echo "Logout";
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
            }
        }
    }

?>