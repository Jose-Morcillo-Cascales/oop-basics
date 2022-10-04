<?php

require_once('./classAthlete.php');
require_once('./classFootballPlayer.php');
require_once('./classGoalKeaper.php');



$footballPlayer= new FootballPlayer(10,34,46,34,26);
$goalKeaperPlayer = new GoalKeaper(20,35,43,26,45,19);


$restfootballPlayer =$footballPlayer->sprint();
$footballPlayer=$footballPlayer;








