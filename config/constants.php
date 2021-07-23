<?php
    define("URL", "http://localhost/php-employee-management-v2/");
    define('BASE_PATH', getcwd());
    
    define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
    define('DOMAIN', $_SERVER['HTTP_HOST']);
    define('BASE_URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');
    echo BASE_URL;
?>
