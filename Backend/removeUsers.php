<?php



session_start();

include_once("../db/config.php");
include_once("../classes/User.php");

 

$errors = [];



global $con;
$users = User::selectAllUser();

if (isset($_GET['id'])) {
    $addNew = $con->prepare("DELETE FROM `user` WHERE id=?");
        // use exec() because no results are returned
        

        if (($addNew->execute([$_GET['id']]))=== true) {
            array_push($errors,'User deleted successfully');
            $users = User::selectAllUser();
            

            
        }else{
            array_push($errors,'Sorry this User doesn t exist');
        }
}
if (isset($_POST['deleteUserBtn'])) {
    

    //die ("File is not an image.");
    extract($_POST);
    //$user=Student::add_new_student($photo,$firstname,$lasstname,$date_of_birth,$semester,$userid,$email,$area,$status,$gender,$password);

    try {



       
        $addNew = $con->prepare("DELETE FROM `user` WHERE id=? AND role=?"
         );
        // use exec() because no results are returned
        

        if (($addNew->execute([$userid],[$role]))=== true) {
            header("Location:Removeuser.php");
            array_push($errors,'Student deleted successfully');
            $users = User::selectAllUser();
            

            
        }else{
            array_push($errors,'Sorry this student doesn t exist');
        }
  
       



      } catch(PDOException $e) {
        die( $sql . "<br>" . $e->getMessage());
        die("not New record created successfully") ;
      }
      
      $con = null;


}






?>