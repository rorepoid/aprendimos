<?php


namespace App\Concepts;


class Text
{
    protected $read = false;

    public function __construct()
    {
    }

    public function markAsRead()
    {
        $this->read = true;
    }
}
