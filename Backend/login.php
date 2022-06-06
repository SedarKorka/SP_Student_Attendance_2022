<?php


session_start();


include_once("db/config.php");
include_once("classes/User.php");


include('Functions/is_login.php');
redirect_user_if_log_in();

$errors = [];
extract($_POST);


global $con;


if (isset($_POST)) {
    
    if (empty($role)) {
        array_push($errors,'Please select your role!');
    }
    if (empty($email)) {
        array_push($errors,'Please write the email!');
    }
    if (empty($pass)) {
        array_push($errors,'Please write the password!');
    }
   
    
}

if (count($errors) == 0) {
    try {
        $user = User::selectUserByEmailAndRole($role,$email,$pass);




        if (count($user) == 0) {
            
            array_push($errors,"Sorry, this user don't exist!");
        }else {
            $_SESSION['email'] = $email;
            $_SESSION['firstname'] = $user->firstname;
            $_SESSION['lassname'] = $user->	lasstname;

            
            header("Location: Faculties/Frame.php");
        }
    } catch (\Throwable $th) {
        //throw $th;
    }
}

?>