<?php

    class User
    {
        
        private $firstname;
        private $lastname;
        private $email;
        private $password;
        private $gender;
        private $mobile;
        private $designation;
        private $status;
        private $role;

        public function __construct($firstname,$lastname,$email,$password,$gender,$mobile,$designation,$status,$role){
            $this->firstname = $firstname; 
            $this->lastname = $lastname; 
            $this->email = $email; 
            $this->password = $password; 
            $this->gender = $gender; 
            $this->mobile = $mobile; 
            $this->designation = $designation; 
            $this->status = $status; 
            $this->role = $role;  

        }

        public static function selectUserByEmailAndRole($role,$email,$password){
            global $con;
            $re = $con->prepare("SELECT * FROM user WHERE role= :role  AND email=:email AND password = :password");
            $re->bindParam(":role",$role);
            $re->bindParam(":email",$email);
            $re->bindParam(":password",$password);
            $re->execute();

            $resultat = [];
            while ($row = $re->fetchObject()) {
                array_push($resultat,$row);
            }
            return $resultat;
        }
        




    }
    

?>