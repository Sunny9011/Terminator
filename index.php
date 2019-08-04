<?php
require_once __DIR__ . '/autoload.php';

//class index
//{
//    protected $teamLead;
//
//    public function __construct()
//    {
//        $this->teamLead = new TeamLead();
//    }
//    public function execute()
//    {
//       return $this->teamLead->getLeadState();
//    }
//}
$tester = new TeamLead(3);
print_r('mood: ' . $tester->getMoodLead());
print_r(' State: ' . $tester->setStateLead());
//$tester->setStateLead();
//$test = new index();
//print_r($test->execute());