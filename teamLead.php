<?php


class teamLead
{
    protected $moodLead;
    protected $state = [['stateName' => 'he state "do not fall for eyes', 'pharse' => 'some phare'], 'Bad mood', 'Normal mood', 'Good mood'];

    public function __construct()
    {
        $this->moodLead = mt_rand(0, 3);
    }
    public function getMoodTeamLead()
    {
        return $this->moodLead;
    }

    public function getLeadState()
    {
        $stateId = $this->getMoodLead();

        return $this->state[$stateId];
    }
}