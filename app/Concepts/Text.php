<?php


namespace App\Concepts;


class Text
{
    public $read = false;

    public function __construct()
    {
    }

    public function markAsRead()
    {
        $this->read = true;
    }
}
