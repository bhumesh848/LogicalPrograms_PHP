<?php

/**
 * Program for Stopwatch measuring the time that elapses between the start and end clicks
 */
class StopWatch
{
    static $start;
    static $stop;

    static function start()
    {
        // Accessing static variable
        self::$start = round(microtime(true) * 1000);
    }
    static function stop()
    {
        self::$stop = round(microtime(true) * 1000);
    }

    static function elapsed()
    {
        return "Time : " . ((self::$stop - self::$start) / 1000) . " seconds\n";
    }

    static function watch()
    {
        echo "StopWatch\n";
        echo "enter to start ";
        $i = fgets(STDIN);
        //get start time
        self::$start = round(microtime(true) * 1000);

        echo "enter 2 to stop ";
        $i = fgets(STDIN);
        //get stop time
        self::$stop = round(microtime(true) * 1000);
        //printing elapsed time
        echo self::elapsed();
    }
}

$watch = StopWatch::watch();
?>