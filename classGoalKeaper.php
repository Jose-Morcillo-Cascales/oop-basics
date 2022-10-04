<?php

class GoalKeaper extends FootballPlayer {
        public $jump= 0;
        static $team = "Real Madrid";
        

    public function __construct($strength,$speed,$dribbling,$time,$energy,$jump){

            $dribblingModified=$dribbling*0.5;

            parent::__construct($strength,$speed,$dribblingModified,$time,$energy);
            

            $this->jump=$jump;
           

    }
    public function stop($direction){
        if ($this->energy>4){
        echo  "the goalkeeper jumped to the $direction with a leap of $this->jump";
        $this->energy=$this->energy-5;

        }else{
            echo "the player is tired for stop ";
        }
    }
   

    public function __destruct(){
        echo "the " . __CLASS__ . " has been injured";
    }
}