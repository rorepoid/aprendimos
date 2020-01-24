<?php

namespace Tests\Unit;

use App\Concepts\Learning;
use App\Concepts\Person;
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
        $learning = new Learning();
        $this->assertInstanceOf("App\Concepts\Process", $learning);
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

}
