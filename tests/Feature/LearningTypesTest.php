<?php

namespace Tests\Feature;

use App\Concepts\Event;
use App\Concepts\Learning;
use App\Concepts\Types\NonAssociativeLearning;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LearningTypesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $nonAssociativeLearning = new NonAssociativeLearning(new Event());
        $this->assertInstanceOf(Learning::class, $nonAssociativeLearning);
    }
}
