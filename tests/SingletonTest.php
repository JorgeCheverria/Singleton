<?php


namespace jcheverria\Singleton\Tests;


use jcheverria\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * @covers
     * @test
     */
    public function singletonTest()
    {
        $instanceA = Singleton::getInstance();
        $instanceB = Singleton::getInstance();

        //Check if the objects are from the same instance
        $this->assertInstanceOf(Singleton::class, $instanceA);

        //Check if the objects are of the same class
        $this->assertSame($instanceA, $instanceB);
    }
}