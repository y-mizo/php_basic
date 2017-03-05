<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Func;
use Carbon\Carbon;

class FuncTest extends TestCase
{
    private $target;

    public function setUp()
    {
        $this->target = new Func();
    }

    public function testIsFutureDate()
    {
        // 未来の日付文字列を渡した時だけ、true が返ってくるはず
        $this->assertEquals(false, $this->target->isFutureDate(Carbon::yesterday()->toDateString()));
        $this->assertEquals(false, $this->target->isFutureDate(Carbon::today()->toDateString()));
        $this->assertEquals(true, $this->target->isFutureDate(Carbon::tomorrow()->toDateString()));
    }

    public function testHtmlEscape()
    {
        // エスケープされた文字列が返ってくるはず
        $this->assertEquals('&amp;&quot;&apos;', $this->target->htmlEscape('&"\''));
        $this->assertEquals('&lt;&gt;', $this->target->htmlEscape('<>'));
        $this->assertEquals('=&lt;&gt;=', $this->target->htmlEscape('=<>='));
    }

    public function testTaxPrice()
    {
        // 消費税を加算し、小数点以下が切り捨てられた整数が返ってくるはず
        $this->assertEquals(108, $this->target->taxPrice(100));
        $this->assertEquals(118, $this->target->taxPrice(110));
        $this->assertEquals(129, $this->target->taxPrice(120));
    }
}
