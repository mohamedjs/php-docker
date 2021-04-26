<?php

namespace App;

class HomeController
{    
    private $string = 'new';
    /**
     * Method sayHelloWorld
     *
     * @param int $number
     * @return int
     */
    public function fib(int $number): int
    {
        if($number < 1)
            return 1;
        return $this->fib($number-1)*$number;
    }
}
