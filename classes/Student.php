<?php

    class Student
    {
        private $photo;
        private $firstname;
        private $lasstname;
        private $date_of_birth;
        private $semester;
        private $userid;
        private $email;
        private $area;
        private $status;
        private $gender;
        private $password;
        

        public function __construct($photo,$firstname,$lasstname,$date_of_birth,$semester,$userid,$email,$area,$status,$gender,$password){
            $this->photo = $photo;
            $this->firstname = $firstname; 
            $this->lasstname = $lasstname; 
            $this->date_of_birth = $date_of_birth;
            $this->semester = $semester;
            $this->userid = $userid;
            $this->email = $email; 
            $this->area = $area;
            $this->status = $status; 
            $this->gender = $gender;  
            $this->password = $password; 
            

        }


        public static function selectAllStudent(){
            global $con;
            $re = $con->prepare("SELECT * FROM  students");
       
            $re->execute();

            $resultat = [];
            while ($row = $re->fetchObject()) {
                array_push($resultat,$row);
            }
            return $resultat;
        }

       

        public static function add_new_student($photo,$firstname,$lasstname,$date_of_birth,$semester,$userid,$email,$area,$status,$gender,$password){
            global $con;
            $re = $con->prepare("INSERT INTO students SET 
            photo=:photo,
            firstname=:firstname, 
            lasstname=:lasstname, 
            date_of_birth=:date_of_birth, 
            semester=:semester, 
            userid=:userid, 
            email=:email, 
            area=:area, 
            status=:status, 
            gender=:gender, 
            password=:password");
            
            $re->bindParam(':photo',$photo); 
            $re->bindParam(':firstname',$firstname); 
            $re->bindParam(':lasstname',$lasstname); 
            $re->bindParam(':date_of_birth',$date_of_birth); 
            $re->bindParam(':semester',$semester); 
            $re->bindParam(':userid',$userid); 
            $re->bindParam(':email',$email); 
            $re->bindParam(':area',$area); 
            $re->bindParam(':status',$status); 
            $re->bindParam(':gender',$gender); 
            $re->bindParam(':password',$password);

            $re->execute();
        }
        




    }
    

?>