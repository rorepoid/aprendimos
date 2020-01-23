<?php

namespace Tests\Unit;

use App\Concepts\Learning;
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
}
