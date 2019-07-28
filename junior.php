<?php


class junior
{
    protected $jun;

    public function __construct()
    {
        $this->jun = mt_rand(0,1);
        return $this->jun;
    }

}