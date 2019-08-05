<?php
require_once __DIR__ . '/autoload.php';

class Listener
{
    protected $getArrayMood;
    protected $count;
    protected $countingArray = [];

    public function setStateCounting()
    {
        $this->getArrayMood = new TeamLead();
        $this->countingArray = array($this->getArrayMood->setStateLead() => ++$this->count);
    }

}