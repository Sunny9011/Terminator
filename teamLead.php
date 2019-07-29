<?php

class teamLead
{
    protected $moodLead;
    protected $state = [
        ['state1' => 'he state "do not fall for eyes', 'phrase1' => 'RUN jun'],
        ['state2' => 'Bad mood'],
        ['phrase2' => 'Go away!'],
        ['state3' => 'Normal mood'],
        ['phrase3' => 'Normal junior'],
        ['state4' => 'Good mood'],
        ['phrase4' => 'Good boy junior'],
    ];

    public function __construct()
    {
        $this->moodLead = mt_rand(0, 3);
    }

    public function getLeadState()
    {
        $stateId = $this->getMoodLead();
        return $this->state[$stateId];
    }

    public function getMoodLead()
    {
        return ($this->lead + $this->getWorkJun() < count($this->state)) ? $this->lead +
            $this->getWorkJun() : count($this->state) - 1;
    }
}