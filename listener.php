<?php

class Listener
{
    public $listeners = [];

    public function __construct($t1000, $t1001, $listener)
    {
        $this->listeners = $listener;
    }

    public function sendMood($mood)
    {
        foreach ($this->listeners as $listener) {
            $listener->setMood($mood);
        }
    }
}