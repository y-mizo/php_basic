<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Loop;

class LoopTest extends TestCase
{
    private $target;

    public function setUp()
    {
        $this->target = new Loop();
    }

    public function testGetSequence()
    {
        // 等差数列が配列で返ってくるはず
        $this->assertEquals(
            [1, 4, 7, 10, 13],
            $this->target->getSequence(1, 3, 5)
        );
    }

    public function testGetCharLine()
    {
        // 5個の @ が帰ってくるはず
        $this->assertEquals('@@@@@', $this->target->getCharLine('@', 5));
    }
}
