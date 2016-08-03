<?php


class StackTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \App\App
     */
    private $app;

    public function setUp()
    {
        $this->app = new \App\App(2);
    }

    public function testMult()
    {
        $this->assertEquals(4, $this->app->mult(2));
        $this->assertNotEquals(4, $this->app->mult(3));
    }
}

