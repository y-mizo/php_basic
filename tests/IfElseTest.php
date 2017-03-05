<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\IfElse;

class IfElseTest extends TestCase
{
    private $target;

    public function setUp()
    {
        $this->target = new IfElse();
    }

    public function testGetLerger()
    {
        // 2 が帰ってくるはず
        $this->assertEquals(2, $this->target->getLarger(1, 2));
        $this->assertEquals(2, $this->target->getLarger(2, 2));
    }

    public function testGetLergerTernary()
    {
        // 2 が帰ってくるはず
        $this->assertEquals(2, $this->target->getLargerTernary(1, 2));
        $this->assertEquals(2, $this->target->getLargerTernary(2, 2));
    }

    public function testGetAbsolute()
    {
        // 2 が帰ってくるはず
        $this->assertEquals(2, $this->target->getAbsolute(2));
        $this->assertEquals(2, $this->target->getAbsolute(-2));
    }
}
