<?php

class Junior
{
    protected $jun;

    public function __construct()
    {
        $this->jun = (int)$_POST['stateJun'];
    }

    public function getWorkJun()
    {
        if ($this->jun === 0) {
            return 0;
        } else {
            return 1;
        }
    }
}