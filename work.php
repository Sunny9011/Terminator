<?php
require_once __DIR__ . '/autoload.php';

class work
{
    protected $teamLead;
    protected $listener;

    public function __construct(Teamlead $teamLead)
    {
        $this->teamLead = $teamLead;
        $this->listener = new Listener(['calss t100', 'class t101']);
    }

    public function execute()
    {
        $mood = $this->teamlead->getMoodLead();
        $this->listener->sendMood($mood);
    }
}
