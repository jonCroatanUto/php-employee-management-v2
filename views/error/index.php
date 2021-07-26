<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>assets/css/main.css">
    <title>Error page</title>
    <script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/jsgrid/dist/jsgrid.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo constant('BASE_URL'); ?>assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo constant('BASE_URL'); ?>assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo constant('BASE_URL'); ?>assets/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo constant('BASE_URL'); ?>assets/images/site.webmanifest">
    <link rel="mask-icon" href="<?php echo constant('BASE_URL'); ?>assets/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

    <?php require_once "./views/header.php";?>
    
    <div class="errorContainer">
        <div class="alert alert-danger" role="alert">
            <h4 class="alertHeading">ERROR!!!!</h4>
            <p><?php echo nl2br($this->message);?></p>
        </div>
    </div>
    
</body>
</html>