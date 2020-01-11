<?php
namespace App;

class FizzBuzz {
    public function getList() 
    {
        $list = range(1, 20);
        $list = array_map(function($number){
            switch ($number) {
                case $number % 3 == 0:
                    return 'fizz';
                    break;
                case $number % 5 == 0: 
                    return 'buzz';
                    break;
                default:
                    return $number;
                    break;
            }
        }, $list);
        return $list;
    }
}