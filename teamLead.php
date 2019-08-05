<?php
require_once __DIR__ . '/autoload.php';

class TeamLead
{
    protected $state = ['He state "do not fall for eyes"',
        'Bad mood',
        'Normal mood',
        'Good mood',
    ];
    protected $emotionsLead = ['Run Junior',
        'Bad junior',
        'Good boy',
        'Good job'
    ];
    protected $currentState;
    protected $currentMood;

    public function __construct()
    {
        $this->currentState =  (int)$_POST['stateLead'];
        $this->currentMood =  $this->currentState;
    }

    public function getMoodLead()
    {
        return $this->currentState;
    }

    public function setStateLead()
    {
        $junior = new Junior();
        $getStateJun = $junior->getWorkJun();
        $this->currentState = $getStateJun ? $this->increaseCurrentState() : $this->decreaseCurrentState();

        return $this->state[$this->currentState];
    }
    public function getEmotionsLead()
    {
        $junior = new Junior();
        $getStateJun = $junior->getWorkJun();
        $this->currentMood = $getStateJun ? $this->moodImprovement() : $this->moodDecline();
        return $this->emotionsLead[$this->currentMood];

    }

    public function increaseCurrentState()
    {
        return $this->currentState + 1 >= count($this->state) ? $this->currentState : ++$this->currentState;
    }

    public function moodImprovement()
    {
        return $this->currentMood + 1 >= count($this->emotionsLead) ? $this->currentMood : ++$this->currentMood;
    }

    public function moodDecline()
    {
        return $this->currentMood ? --$this->currentMood : $this->currentMood;
    }

    public function decreaseCurrentState()
    {
        return $this->currentState ? --$this->currentState : $this->currentState;
    }
}