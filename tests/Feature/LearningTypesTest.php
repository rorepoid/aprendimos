<?php

namespace Tests\Feature;

use App\Concepts\Event;
use App\Concepts\Learning;
use App\Concepts\Types\ActiveLearning\ActiveLearning;
use App\Concepts\Types\NonAssociativeLearning\NonAssociativeLearning;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LearningTypesTest extends TestCase
{
    /**
     * El aprendizaje no asociativo es un tipo de aprendizaje
     *
     * @return void
     */
    public function testNonAssociativeLearningIsALearningType()
    {
        $this->assertInstanceOf(Learning::class, $this->nonAssociativeLearning());
    }

    public function testNonAssociativeLearningMustAcceptRepetitions()
    {
        $repetitions = 1;
        $event = new Event();
        $this->assertInstanceOf(Learning::class, $this->nonAssociativeLearning($event, $repetitions));
    }

    public function testNonAssociativeLearningHasHabituationForm()
    {
        $nonAssociativeLearning = $this->nonAssociativeLearning($this->event(), $this->quantity());
        $form = $nonAssociativeLearning->hasForm('Habituation');
        $this->assertTrue($form);
    }

    public function testNonAssociativeLearningHasSensitizationForm()
    {
        $nonAssociativeLearning = $this->nonAssociativeLearning($this->event(), $this->quantity());
        $form = $nonAssociativeLearning->hasForm('Sensitization');
        $this->assertTrue($form);
    }

    public function nonAssociativeLearning(Event $event = null, int $quantity = 1)
    {
        //Add an event and number(quantity)
        $obj = new NonAssociativeLearning($event ?? new Event(), $quantity);
        return $obj;
    }

    public function event(Event $event = null)
    {
        return $event ?? new Event();
    }

    public function quantity($quantity = null)
    {
        return $quantity ?? 1;
    }

    public function testActiveLearningIsATypeOfLearning()
    {
        $this->assertInstanceOf(Learning::class, $this->activeLearning());
    }

    public function activeLearning(Event $event = null)
    {
        return new ActiveLearning($event ?? new Event());
    }
}
