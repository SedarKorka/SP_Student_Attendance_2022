<?php



session_start();

include_once("../db/config.php");
include_once("../classes/User.php");

 

$errors = [];



global $con;
$users = User::selectById();








?>