<?php
require_once __DIR__ . '/autoload.php';

class index
{
    protected $teamLead;

    public function __construct()
    {
        $this->teamLead = new TeamLead();
    }
    public function execute()
    {
       return $this->teamLead->getLeadState();
    }
}
$test = new index();
print_r($test->execute());