<?php



session_start();

include_once("../db/config.php");
include_once("../classes/Classes.php");

 

$errors = [];


 global $con;


if (isset($_POST['addBtn'])) {
    
    extract($_POST);
        try {
            $addNew = $con->prepare("INSERT INTO shedules( date, time, levels, studies,sub,day) VALUES (?,?,?,?,?,?)");
            // use exec() because no results are returned
            $addNew->execute([$date,$time,$levels,$studies,$sub,$day]);
    
            array_push($errors,'New record created successfully');
        } catch(PDOException $e) {
            die( $sql . "<br>" . $e->getMessage());
            die("not New record created successfully") ;
        }
        
        $con = null;
    
}

/*

if (isset($_POST['addBtn'])) {
    //die ("File is not an image.");
    extract($_POST);
    //$user=Student::add_new_student($photo,$firstname,$lasstname,$date_of_birth,$semester,$userid,$email,$area,$status,$gender,$password);

    try {



       
        $addNew = $con->prepare("INSERT INTO shedules( date, time, levels, studies) VALUES (?,?,?,?)");
        // use exec() because no results are returned
        $addNew->execute([$photo,$firstname,$lasstname,$date_of_birth,$semester,$userid,$email,$area,$status,$gender,$password]);
  
        array_push($errors,'New record created successfully');
      } catch(PDOException $e) {
        die( $sql . "<br>" . $e->getMessage());
        die("not New record created successfully") ;
      }
      
      $con = null;


}*/






?>