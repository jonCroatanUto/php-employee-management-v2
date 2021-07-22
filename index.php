<!DOCTYPE html>
<html lang="en">
<?php

require_once('./lib/Model.php'); 
require_once('./lib/Controller.php'); 
require_once('./lib/DataBase.php'); 
require_once('./lib/View.php'); 
require_once('./lib/Router.php');  

require_once('./config/db.php');  
require_once('./config/constants.php');  
require_once('./config/queries.php');  

$route= new Router();

?>
<!-- <?php //require_once('./src/library/sessionHelper.php'); ?>


