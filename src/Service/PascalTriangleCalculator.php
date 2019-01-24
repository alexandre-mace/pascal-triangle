<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/01/19
 * Time: 14:16
 */

namespace App\Service;

class PascalTriangleCalculator
{
    public function calculate($ordinate, $abscissa) {
        if (is_int($ordinate) && is_int($abscissa)) {
            if ($ordinate > $abscissa) {
                return ($this->factorial($ordinate)) / ($this->factorial($abscissa) * $this->factorial($ordinate - $abscissa));
            }
            return 'Error, abscissa most be inferior to ordinate ! ;)';
        }
        return 'Error, abscissa and ordinate most be digits';

    }

    function factorial($number){
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++){
            $factorial = $factorial * $i;
        }
        return $factorial;
    }
}