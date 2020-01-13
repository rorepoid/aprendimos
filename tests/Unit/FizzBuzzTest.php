<?php

namespace Tests\Unit;

use App\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_get_1_when_value_is_1()
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals(1, $list[0]);
    }

    public function test_get_fizz_when_value_is_3()
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals("Fizz", $list[2]);
    }

    public function test_get_buzz_when_value_is_5()
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals("Buzz", $list[4]);
    }
}
