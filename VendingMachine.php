<?php

class VendingMachine
{
    public $getChangeArray = array();
    public $sum = 0;

    /**
     * function to get change of notes
     * Passing parameter $money
     */
    public function getChange($money)
    {
        while ($money != 0) {
            if ($money >= 1000) {
                $notes = floor($money / 1000);
                $money -= ($notes * 1000);
                $this->getChangeArray[1000] = $notes;
            } else if ($money >= 500) {
                $notes = 1;
                $money -= 500;
                $this->getChangeArray[500] = $notes;
            } else if ($money >= 100) {
                $notes = floor($money / 100);
                $money -= ($notes * 100);
                $this->getChangeArray[100] = $notes;
            } else if ($money >= 50) {
                $notes = 1;
                $money -= 50;
                $this->getChangeArray[50] = $notes;
            } else if ($money >= 10) {
                $notes = floor($money / 10);
                $money -= ($notes * 10);
                $this->getChangeArray[10] = $notes;
            } else if ($money >= 5) {
                $notes = 1;
                $money -= 5;
                $this->getChangeArray[5] = $notes;
            } else if ($money >= 2) {
                $notes = floor($money / 2);
                $money -= ($notes * 2);
                $this->getChangeArray[2] = $notes;
            } else {
                $notes = 1;
                $money -= 1;
                $this->getChangeArray[1] = $notes;
            }
            $this->sum += $notes;
        }
    }

    /**
     * function to show change of notes 
     * printing total number of notes 
     */
    public function showChange()
    {
        foreach ($this->getChangeArray as $key => $values) {
            echo $key . " notes : " . $values . "\n";
        }
        echo "Total Number of Notes : " . $this->sum;
    }
}

//Creating object of class
$vendingMachine = new VendingMachine();
//Getting the amount from user
$money = (int)readline("Enter the value : ");
if (gettype($money) == 'integer') {
    if ($money > 0) {
        $vendingMachine->getChange($money);
        $vendingMachine->showChange();
    } else {
        echo "The inpute value is -ve or zero";
    }
}
?>