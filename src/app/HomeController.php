<?php

namespace App;

class HomeController
{  
    /**
     * Method factorial
     *
     * @param int $number
     * @return int
     */
    public function factorial(int $number): int
    {
        if($number < 1)
            return 1;
        return $this->factorial($number-1)*$number;
    }
}
