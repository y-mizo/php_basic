<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Intro;

class IntroTest extends TestCase
{
    private $target;

    public function setUp()
    {
        $this->target = new Intro();
    }

    public function testHelloWorld()
    {
        // 'Hello World!' と表示されるはず
        $this->expectOutputString('Hello World!');
        $this->target->helloWorld();
    }

    public function testGreeting()
    {
        $this->assertEquals('こんにちは', $this->target->greeting());
    }
}
