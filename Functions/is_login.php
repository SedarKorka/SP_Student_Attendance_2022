
  
<?php
session_start(); 


//If user is log in
function redirect_user_if_log_in(){
    if (isset($_SESSION['email'])) {
        header("Location: Faculties/Frame.php");
    }
}



//If User is not log in
function redirect_user_if_is_not_log_in(){
    if (!isset($_SESSION['email'])) {
        header("Location: index.php");
    }
}
    
    
?>