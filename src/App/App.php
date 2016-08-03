<?php

namespace App;


class App
{
    private $mult = 2;

    /**
     * App constructor.
     * @param int $mult
     */
    public function __construct($mult = null)
    {
        if (!empty($mult) && is_numeric($mult)) {
            $this->mult = (int) $mult;
        }
    }

    public function mult($number)
    {
        return (int)$number * $this->mult;
    }
}
