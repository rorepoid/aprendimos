<?php
namespace App;

class FizzBuzz {
    public function getList() 
    {
        $list = range(1, 20);
        foreach(range(1,20) as $key => $value){
            if ($value % 3 == 0) {
                $list[$key] = "fizz";
            }elseif ($value % 5 == 0) {
                $list[$key] = "buzz";
            }else {
                $list[$key] = $value;
            }
        }
        return $list;
    }
}