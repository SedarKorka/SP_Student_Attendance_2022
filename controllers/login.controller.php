<?php 
require_once ('config/config.php');
require_once ('config/db.php');
require_once ('functions/functions.php');
require_once ('classes/User.php');


global $con;

$errors = [];
extract($_POST);


if (isset($_POST)) {
    if (empty($role)) {
        array_push($errors,'Please select your role!');
    }
    if (empty($email)) {
        array_push($errors,'Please write the email!');
    }
    if (empty($password)) {
        array_push($errors,'Please write the password!');
    }
   
    
}

if (count($errors) == 0) {
    try {
        $user = User::selectUserByEmailAndRole($role,$email,$password);
        if (count($user) == 0) {
            array_push($errors,"Sorry, this user don't exist!");
        }else {
            header("Location: ".LINK.'toppage/');
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
}





?>