<?php


namespace App\Concepts\Types\NonAssociativeLearning;


use App\Concepts\Event;
use App\Concepts\Learning;

/**
 * Non-associative learning refers to "a relatively permanent change in the strength of response
 * to a single stimulus due to repeated exposure to that stimulus.
 * Changes due to such factors as sensory adaptation, fatigue, or injury do not qualify
 * as non-associative learning."
 * @package App\Concepts\Types
 */
class NonAssociativeLearning extends Learning
{
    protected $repetitions;

    public function __construct(Event $event, string $repetitions)
    {
        $this->repetitions = $repetitions;
        parent::__construct($event);
    }

    public function hasForm(string $form)
    {
        $class = __NAMESPACE__."\Forms\\$form";

        return class_exists($class);
    }
}
