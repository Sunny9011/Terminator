<?php
require_once __DIR__ . '/autoload.php';

class TeamLead
{
    protected $moodLead;
    protected $state = ['He state "do not fall for eyes"',
        'Bad mood',
        'Normal mood',
        'Good mood',
    ];
    protected $currentState;

    public function __construct( int $currentState)
    {
        $this->currentState = $currentState;
//        $this->moodLead = $this->state[$this->stateNow];
    }

    public function getMoodLead()
    {
        return $this->currentState;
    }

    public function setStateLead()
    {
        $junior = new Junior(0);
        $getStateJun = $junior->getWorkJun();
        print_r($getStateJun);
        $this->stateNow = $getStateJun ? $this->increaseCurrentState() : $this->decreaseCurrentState();

        return $this->state[$this->currentState];
    }

    public function increaseCurrentState () {
        return $this->currentState + 1 >= count($this->state) ? $this->currentState : ++$this->currentState;
    }

    public function decreaseCurrentState () {
        return $this->currentState ? --$this->currentState : $this->currentState;
    }
}