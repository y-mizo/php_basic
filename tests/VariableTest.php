<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Variable;

class VariableTest extends TestCase
{
    private $target;

    public function setUp()
    {
        $this->target = new Variable();
    }

    public function testGetString()
    {
        // "hello" が返ってくるはず
        $this->assertEquals("hello", $this->target->getString());
    }

    public function testGetInt()
    {
        // 1 が返ってくるはず
        $this->assertEquals(1, $this->target->getInt());
    }
    
    public function testGetFloat()
    {
        // 1.0 が返ってくるはず
        $this->assertEquals(1.0, $this->target->getFloat());
    }
    
    public function testGetBooleanTrue()
    {
        // true が返ってくるはず
        $this->assertEquals(true, $this->target->getBooleanTrue());
    }

    public function testGetBooleanFalse()
    {
        // false が返ってくるはず
        $this->assertEquals(false, $this->target->getBooleanFalse());
    }

    public function testGetNull()
    {
        // NULL が返ってくるはず
        $this->assertEquals(null, $this->target->getNull());
    }
}
