<?php



session_start();

include_once("../db/config.php");
include_once("../classes/Student.php");

 

$errors = [];



global $con;
$students = Student::selectAllStudent();

if (isset($_GET['id'])) {
    $addNew = $con->prepare("DELETE FROM `students` WHERE id=?"
         );
        // use exec() because no results are returned
        

        if (($addNew->execute([$_GET['id']]))=== true) {
            array_push($errors,'Student deleted successfully');
            $students = Student::selectAllStudent();
            

            
        }else{
            array_push($errors,'Sorry this student doesn t exist');
        }
}
if (isset($_POST['deleteStudentBtn'])) {
    

    //die ("File is not an image.");
    extract($_POST);
    //$user=Student::add_new_student($photo,$firstname,$lasstname,$date_of_birth,$semester,$userid,$email,$area,$status,$gender,$password);

    try {



       
        $addNew = $con->prepare("DELETE FROM `students` WHERE id=?"
         );
        // use exec() because no results are returned
        

        if (($addNew->execute([$studentid]))=== true) {
            header("Location:RemoveStudents.php");
            array_push($errors,'Student deleted successfully');
            $students = Student::selectAllStudent();
            

            
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