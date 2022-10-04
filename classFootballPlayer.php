<?php
require_once('./interfaces.php');


class FootballPlayer  extends Athlete implements Training {
    public $strength=0;
    public $speed=0;
    public $dribbling=0;

    function __construct($strength,$speed,$dribbling,$time,$energy){
        parent::__construct($time,$energy);
        $this->strength=$strength;
        $this->speed=$speed;
        $this->dribbling=$dribbling;
    }

    public function shoot($direction){
        if ($this->energy>4){
        echo "The shot went to the $direction with a power of $this->strength";
        $this->energy=$this->energy-5;
        }else{
            
        echo "the player is tired for shoot ";
            
        }

    }
    
    public function dribbling($direction){
        if ($this->energy>4){
        echo  "the player dribbled $direction  with a quality of $this->dribbling";
        $this->energy=$this->energy-5;
        }
        else{
        echo "the player is tired for dribbling ";

        }

    }

    public function sprint(){
        if ($this->energy>4){
            echo "the player is doing a sprint of $this->speed";
            $this->energy=$this->energy-5;
        }else 
        echo "the player is tired for sprint ";
       

    }

    public function __destruct(){
        echo "<br>";
        echo "the" . __CLASS__ . "has been injured";
    }
    public function rest(){
            $this->energy=$this->energy+$this->time;
            echo "The footballplayer rest $this->time seconds , now he/she has $this->energy ";
    }
    public function celebration(){
        echo "I win";
    }
    public function runPractice(){
        $this->speed=$this->speed+10;
            
    }
    public function shootPractice(){
        $this->strength=$this->strength+10;

    }
}