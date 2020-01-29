<?php

namespace Tests\Unit;

use App\Concepts\Animal;
use App\Concepts\Event;
use App\Concepts\Learning;
use App\Concepts\Person;
use App\Concepts\Process;
use App\Events\TextRead;
use PHPUnit\Framework\TestCase;

class LearningConceptTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_learning_is_a_process()
    {
        $learning = new Learning(new Event());
        $this->assertInstanceOf(Process::class, $learning);
    }

    public function test_person_has_knowledge()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("knowledge", $person);
    }

    public function test_person_has_behaviors()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("behaviors", $person);
    }

    public function test_person_has_skills()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("skills", $person);
    }

    public function test_person_has_values()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("values", $person);
    }

    public function test_person_has_preferences()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("preferences", $person);
    }

    public function test_person_can_acquire_new_knowledge_behavior_skill_value_or_preference()
    {
        $person = new Person();
        $this->assertTrue(method_exists($person, "acquire"));
    }

    public function test_person_can_modify_existing_knowledge_behavior_skill_value_or_preference()
    {
        $person = new Person();
        $this->assertTrue(method_exists($person, "modify"));
    }

    public function test_person_can_learn()
    {
        $person = new Person();
        $this->assertTrue(method_exists($person, "learn"));
    }

    public function test_animals_can_learn()
    {
        $person = new Animal();
        $this->assertTrue(method_exists($person, "learn"));
    }

    public function test_learning_needs_at_least_one_event()
    {
        $event = new Event();
        $learning = new Learning($event);
        $test = $learning->getEvent();

        $this->assertInstanceOf(Event::class, $test);
    }

    public function test_text_read_is_an_event()
    {
        $textRead = new TextRead();
        $this->assertInstanceOf(Event::class, $textRead);
    }

}
