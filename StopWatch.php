<?php

/**
 * Program for Stopwatch measuring the time that elapses between the start and end clicks
 */
class StopWatch
{
    static function watch($startTime,$endTime){
        echo "Enter 1 to start Time";
        echo "Enter 2 to end time";
        $num = readline("Enter option ");
        switch($num){
            case 1:
                $startTime = time();
                echo"\n" . $startTime;
                StopWatch::watch($startTime,$endTime);
                break;
            case 2:
                $endTime = time();
                echo "\n" . $endTime;
                $elapssedTime = $endTime - $startTime; 
                echo "\n" . $elapssedTime;
                break;
                default:
                echo "enter valid number";

        } 
    }
}
$startTime = 0;
$endTime = 0;
StopWatch::watch($startTime,$endTime);  
?>