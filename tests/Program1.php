<?php
require_once __DIR__ . '/../src/Prog1.php';

class Program1 extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $simple = new Prog1 (10);
        $result = $simple->modulus(2);

        $this->assertEquals(0, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $simple = new Prog1 (2);
        $result = $simple->modulus(15);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $simple = new Prog1 (2);
        $result = $simple->modulus('Z');
    }

    public function testModulus1()
    {
        $simple = new Prog1 (15);
        $result = $simple->modulus(10);

        $this->assertEquals(5, $result);
    }

    public function testModulus2()
    {
        $simple = new Prog1 (32);
        $result = $simple->modulus(12);

        $this->assertEquals(8, $result);
    }

}