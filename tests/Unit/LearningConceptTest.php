<?php

namespace Tests\Unit;

use App\Concepts\Animal;
use App\Concepts\Event;
use App\Concepts\Learning;
use App\Concepts\Person;
use App\Concepts\Process;
use PHPUnit\Framework\TestCase;

class LearningConceptTest extends TestCase
{
    /**
     * El aprendizaje es un proceso.
     *
     * @return void
     */
    public function test_learning_is_a_process()
    {
        $learning = new Learning(new Event());
        $this->assertInstanceOf(Process::class, $learning);
    }

    /**
     * Las personas tienen conocimientos
     */
    public function test_person_has_knowledge()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("knowledge", $person);
    }

    /**
     * Las personas tienen comportamientos
     */
    public function test_person_has_behaviors()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("behaviors", $person);
    }

    /**
     * Las personas tienen habilidades
     */
    public function test_person_has_skills()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("skills", $person);
    }

    /**
     * Las personas tienen valores
     */
    public function test_person_has_values()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("values", $person);
    }

    /**
     * Las personas tienen preferencias
     */
    public function test_person_has_preferences()
    {
        $person = new Person();
        $this->assertObjectHasAttribute("preferences", $person);
    }

    /**
     * Las personas pueden adquirir nuevos conocimientos, comportamientos, habilidades, valoresw o preferencias
     */
    public function test_person_can_acquire_new_knowledge_behavior_skill_value_or_preference()
    {
        $person = new Person();
        $this->assertTrue(method_exists($person, "acquire"));
    }

    /**
     * Las personas pueden  modificar conocimientos, comportamientos, habilidades, valores o preferencias
     */
    public function test_person_can_modify_existing_knowledge_behavior_skill_value_or_preference()
    {
        $person = new Person();
        $this->assertTrue(method_exists($person, "modify"));
    }

    /**
     * Las personas pueden aprender
     */
    public function test_person_can_learn()
    {
        $person = new Person();
        $this->assertTrue(method_exists($person, "learn"));
    }

    /**
     * Los animales pueden aprender
     */
    public function test_animals_can_learn()
    {
        $person = new Animal();
        $this->assertTrue(method_exists($person, "learn"));
    }

    /**
     * El aprendizaje necesita al menos un evento
     */
    public function test_learning_needs_at_least_one_event()
    {
        $event = new Event();
        $learning = new Learning($event);
        $test = $learning->getEvents();

        foreach ($test as $item) {
            $this->assertInstanceOf(Event::class, $item);
        }
    }
}
