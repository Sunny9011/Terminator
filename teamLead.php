<?php
require_once __DIR__ . '/autoload.php';
class TeamLead
{
    protected $moodLead;
    protected $state = [
        ['state1' => 'He state "do not fall for eyes"', 'phrase1' => 'RUN jun'],
        ['state2' => 'Bad mood', 'phrase2' => 'Go away!'],
        ['state3' => 'Normal mood', 'phrase3' => 'Normal junior'],
        ['state4' => 'Good mood', 'phrase4' => 'Good boy junior'],
    ];

    public function __construct()
    {
        $this->moodLead = mt_rand(0, 3);
    }

    public function getLeadState()
    {
        return $this->state;
    }
    public function getMoodLead()
    {

    }

}