<?php



session_start();

include_once("../db/config.php");
include_once("../classes/User.php");

 

$errors = [];



global $con;

if (isset($_POST['addBtn'])) {
    //die ("File is not an image.");
    extract($_POST);
    //$user=Student::add_new_student($photo,$firstname,$lasstname,$date_of_birth,$semester,$userid,$email,$area,$status,$gender,$password);

    try {



       
        $addNew = $con->prepare("UPDATE `user` SET  password=?  WHERE id=?");
        // use exec() because no results are returned
        $addNew->execute([$newPass,$stuId]);
  
        array_push($errors,'Password changed successfully');
      } catch(PDOException $e) {
        die( $sql . "<br>" . $e->getMessage());
        die("not New record created successfully") ;
      }
      
      $con = null;


}






?>