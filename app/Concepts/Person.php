<?php


namespace App\Concepts;


use App\Events\TextRead;

class Person
{
    protected $knowledge;
    protected $behaviors;
    protected $skills;
    protected $values;
    protected $preferences;

    public function learn()
    {

    }

    public function acquire()
    {

    }

    public function modify()
    {

    }

    public function readText(Text $text)
    {
        event(new TextRead($this, $text));
    }
}
