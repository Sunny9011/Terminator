<?php
require_once __DIR__ . '/autoload.php';

class work
{
    public function getStateLead()
    {
        $test = new teamLead();
        return $test->getMoodTeamLead();
    }
}
$wew = new work();
print_r($wew->getStateLead());
