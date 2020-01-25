<?php


namespace App\Concepts;


class Learning extends Process
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function getEvent()
    {
        return $this->event;
    }
}
