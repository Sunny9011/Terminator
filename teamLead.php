<?php


class teamLead
{
    protected $moodLead;

    public function __construct()
    {
        $this->moodLead = mt_rand(0, 3);
    }
    public function getMoodTeamLead()
    {
        return $this->moodLead;
    }
}