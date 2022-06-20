<?php

    class MissingClass
    {
        private $idStudent;
        private $date;
        private $subject;
        private $programme;
        private $attendancedate;  
        

        public function __construct($idStudent,$date,$subject,$programme,$level){
            $this->idStudent = $idStudent;
            $this->date = $date; 
            $this->subject = $subject;
            $this->programme = $programme; 
            $this->level = $level;  
        }


        public static function selectAllmissing(){
            global $con;
            $re = $con->prepare("SELECT * FROM missingclass");
       
            $re->execute();

            $resultat = [];
            while ($row = $re->fetchObject()) {
                array_push($resultat,$row);
            }
            return $resultat;
        }

        public static function selectAllmissingById($id){
            global $con;
            $re = $con->prepare("SELECT * FROM missingclass WHERE idStudent=:id");
            $re->bindParam(":id",$id); 
            $re->execute();

            $resultat = [];
            while ($row = $re->fetchObject()) {
                array_push($resultat,$row);
            }
            return $resultat;
        }

        public static function selectAllmissingByIdOnline($id){
            global $con;
            $re = $con->prepare("SELECT DISTINCT date, count(*) as t FROM missingclass WHERE subject is not null AND idStudent=:id GROUP BY date;");
            $re->bindParam(":id",$id); 
            $re->execute();

            $resultat = [];
            while ($row = $re->fetchObject()) {
                array_push($resultat,$row);
            }
            return $resultat;
        }

        public static function selectAllStudent(){
            global $con;
            $re = $con->prepare("SELECT * FROM user WHERE role='Student'");
       
            $re->execute();

            $resultat = [];
            while ($row = $re->fetchObject()) {
                array_push($resultat,$row);
            }
            return $resultat;
        }
       

        public static function selectUserByEId($idStudent){
            global $con;
            $re = $con->prepare("SELECT * FROM user WHERE id=:id  and role='Student'");
            $re->bindParam(":id",$idStudent); 
            $re->execute();

            $resultat = [];
            while ($row = $re->fetchObject()) {
                array_push($resultat,$row);
            }
            return $resultat;
        }
    }
    

?>