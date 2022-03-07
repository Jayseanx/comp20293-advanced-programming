<?php
require_once __DIR__ . '/../src/Prog2.php';

class Program2 extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new Prog2();
        $simple2->setName('Jaysean');
        $this->assertEquals($simple2->getName(), 'Jaysean');
    }

    public function testGetAge()
    {
        $simple2 = new Prog2();
        $simple2->setAge(20);
        $this->assertEquals($simple2->getAge(), 20);
    }

    public function testFaveColor()
    {
        $simple2 = new Prog2();
        $simple2->setFaveColor('Black');
        $this->assertEquals($simple2->getFaveColor(), 'Black');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Prog2();
        $simple2 ->setName('Jaysean');
        $this->assertIsString($simple2->getName(), 'Jaysean');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Prog2();
        $simple2->setAge(20);
        $this->assertIsInt($simple2->getAge(), 20);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Prog2();
        $simple2->setAge(20);
        $this->assertIsNumeric($simple2->getAge(), 20);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Prog2();
        $simple2->setFaveColor('Black');
        $this->assertIsString($simple2->getFaveColor(), 'Black');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Prog2();
        $simple2->setTogetherInput('Jaysean', 20, 'Black');
        $this->assertEquals($simple2->getTogetherInput(), 'Jaysean', 20, 'Black');
    }

}