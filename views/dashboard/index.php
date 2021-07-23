<!DOCTYPE html>
<html lang="en" class="h-100">
<?php 
// require_once('./library/sessionHelper.php'); 
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>/node_modules/jsgrid/dist/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>/node_modules/jsgrid/dist/jsgrid-theme.min.css" />
    <link rel="stylesheet" href="<?php echo constant('BASE_URL'); ?>/assets/css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo constant('BASE_URL'); ?>/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo constant('BASE_URL'); ?>/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo constant('BASE_URL'); ?>/assets/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo constant('BASE_URL'); ?>/assets/images/site.webmanifest">
    <link rel="mask-icon" href="<?php echo constant('BASE_URL'); ?>/assets/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Dashboard</title>
</head>

<body class="d-flex flex-column h-100">
    <?php require_once "./views/header.php";?> 
    <div class="container-fluid">

        <main class="col-lg-10 p-2 mx-auto gy-2">
            <div>
                <h2>Employees</h2>
            </div>
            <div id="jsGrid"></div>
        </main>
    </div>


    <?php require_once "./views/footer.php";?> 
</body>


<script>const BASE_url= "<?php echo constant('BASE_URL'); ?>"</script>
<script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>node_modules/jsgrid/dist/jsgrid.min.js"></script>
<script type="text/javascript" src="<?php echo constant('BASE_URL'); ?>assets/js/jsgrid.js"></script>

</html>