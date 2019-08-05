<?php
require_once __DIR__ . '/autoload.php';

class Listener
{
    protected $getArrayMood;

    public function __construct()
    {

    }

    public function setStateCounting()
    {
        $this->getArrayMood = new TeamLead();
        $array [] = array(array($this->getArrayMood->setStateLead() => +1));
        return $array;
    }

}