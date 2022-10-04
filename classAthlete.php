<?php
abstract class Athlete {
    public $time =0 ;
    public $energy= 0;

    function __construct($time,$energy){
        $this->time=$time;
        $this->energy=$energy;
    }

    abstract function rest();
    abstract function celebration();


}