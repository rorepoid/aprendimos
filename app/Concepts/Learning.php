<?php


namespace App\Concepts;


class Learning extends Process
{
    protected $events;

    public function __construct(Event ...$events)
    {
        $this->events = $events;
    }

    public function getEvents()
    {
        return $this->events;
    }
}
