<?php
namespace App;

class FizzBuzz {
    public function getList() 
    {
        $list = range(1, 20);
        $list = array_map(function($number){
            switch ($number) {
                case $this->isFizzBuzzFor($number): 
                    return 'FizzBuzz'; break;
                case $this->isFizzFor($number):
                    return 'Fizz'; break;
                case $this->isBuzzFor($number): 
                    return 'Buzz'; break;
                default:
                    return $number; break;
            }
        }, $list);

        return $list;
    }

    public function isFizzFor($number)
    {
        return $number % 3 == 0;  
    }
    
    public function isBuzzFor($number)
    {
        return $number % 5 == 0;  
    }

    public function isFizzBuzzFor($number)
    {
        return $number % 3 == 0 && $number % 5 == 0;
    }

}