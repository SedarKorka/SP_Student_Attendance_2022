<?php



session_start();

include_once("../db/config.php");
include_once("../classes/Classes.php");

 

$errors = [];



global $con;
$Shedules = Classes::selectAllShedules();









?>