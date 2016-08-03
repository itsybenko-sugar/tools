<?php

namespace App;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * Sample class App
 * @package App
 */
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

        // use library
        $dump = new UsernamePasswordToken('qwe', 'qwe', 'qwe');
    }

    /**
     * Sample methof
     *
     * @param int $number
     * @return int
     */
    public function mult($number)
    {
        return (int)$number * $this->mult;
    }
}
