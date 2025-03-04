
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo constant('BASE_URL'); ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="<?php echo constant('BASE_URL'); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo constant('BASE_URL'); ?>node_modules/jquery/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>assets/css/login.css">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo constant('BASE_URL'); ?>assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo constant('BASE_URL'); ?>assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo constant('BASE_URL'); ?>assets/images/favicon-16x16.png">
        <link rel="manifest" href="<?php echo constant('BASE_URL'); ?>assets/images/site.webmanifest">
        <link rel="mask-icon" href="<?php echo constant('BASE_URL'); ?>assets/images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <title>PHP Employee Management V1</title>
    </head>

    <body>
        <?php require_once "./views/header.php";?> 
        <div class="d-flex login-container align-items-center justify-content-center">
            <div class="login-form p-5 rounded">
                <h3>Login</h3>
                <form id="formLogin" action="<?php echo constant("BASE_URL")?>Login/userLogin" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your usename" value="" name="user" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Your Password *" name="password" value="" required />
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btnSubmit" value="Login" />
                    </div>
                </form>
                <div class="text-danger">
                <?php  
                if(isset($_SESSION["notWelcome"])){
                    echo $_SESSION["notWelcome"]; 
                    unset($_SESSION["notWelcome"]);
                }else if(isset($_SESSION['wrongPassword'])){
                    echo $_SESSION["wrongPassword"];
                    unset($_SESSION["wrongPassword"]);
                }else if(isset($_SESSION['wrongUser'])){
                    echo $_SESSION["wrongUser"];
                    unset($_SESSION["wrongUser"]);
                }
                    ?> 
                </div>
            </div>
        </div>
        <?php require_once "./views/footer.php";?> 
       
    </body>
<!-- <script src="./assets/js/index.js"></script> -->

</html>

