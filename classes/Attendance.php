<?php

    class Attendnce
    {
        private $date;
        private $time;
        private $levels;
        private $studies;
        private $sub; 
        private $day;
        

        public function __construct($date,$time,$levels,$studies,$sub,$day){
            $this->date = $date;
            $this->time = $time; 
            $this->levels = $levels;
            $this->studies = $studies; 
            $this->sub = $sub; 
            $this->day = $day;
        }


        public static function selectAllShedules(){
            global $con;
            $re = $con->prepare("SELECT * FROM shedules");
       
            $re->execute();

            $resultat = [];
            while ($row = $re->fetchObject()) {
                array_push($resultat,$row);
            }
            return $resultat;
        }
    }
    

?>