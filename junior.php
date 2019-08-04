<?php

class Junior
{
    protected $jun;

    public function __construct(int $setStateJun)
    {
        $this->jun = $setStateJun;
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