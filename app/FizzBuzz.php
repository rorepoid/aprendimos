<?php
namespace App;

class FizzBuzz {
    public function getList() 
    {
        $list = range(1, 20);
        $list = array_map(function($number){
            switch ($number) {
                case $number % 5 == 0 && $number % 3 == 0: 
                    return 'FizzBuzz';
                    break;
                case $number % 3 == 0:
                    return 'Fizz';
                    break;
                case $number % 5 == 0: 
                    return 'Buzz';
                    break;
                default:
                    return $number;
                    break;
            }
        }, $list);

        return $list;
    }
}