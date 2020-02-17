<?php


namespace App\Traits;


use App\Concepts\Event;
use App\Concepts\Learning;
use App\Concepts\Person;
use App\Concepts\Text;

trait ConceptsTrait
{
    public function person()
    {
        return new Person();
    }

    public function text()
    {
        return new Text();
    }

    public function event()
    {
        return new Event();
    }

    public function learning(Event $event = null)
    {
        return new Learning($event ?? new Event());
    }

    public function quantity($quantity = null)
    {
        return $quantity ?? 1;
    }
}
