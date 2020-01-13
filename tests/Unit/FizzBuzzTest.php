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

    public function test_get_fizzbuzz_when_value_is_15()
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals("FizzBuzz", $list[14]);
    }

    /**
     * @param $number
     * @param $expectedValue
     * @dataProvider numbers
     */
    public function test_correct_values_for_20_numbers($number, $expectedValue)
    {
        $fb = new FizzBuzz();
        $list = $fb->getList();
        $this->assertEquals($expectedValue, $list[$number - 1]);
    }

    public function numbers()
    {
        return [
            [1, 1],
            [2, 2],
            [3, "Fizz"],
            [4, 4],
            [5, "Buzz"],
            [6, "Fizz"],
            [7, 7],
            [8, 8],
            [9, "Fizz"],
            [10, "Buzz"],
            [11, 11],
            [12, "Fizz"],
            [13, 13],
            [14, 14],
            [15, "FizzBuzz"],
            [16, 16],
            [17, 17],
            [18, "Fizz"],
            [19, 19],
            [20, "Buzz"],
        ];
    }
}
