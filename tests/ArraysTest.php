<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Arrays;

class ArraysTest extends TestCase
{
    private $target;

    public function setUp()
    {
        $this->target = new Arrays();
    }

    public function testGetStatistic()
    {
        // 統計情報の連想配列が返ってくるはず
        $expected1 = [
            'num' => 5,
            'total' => 15,
            'max' => 5,
            'min' => 1,
            'ave' => 3,
        ];
        $this->assertEquals($expected1, $this->target->getStatistic([1, 2, 3, 4, 5]));

        $expected2 = [
            'num' => 10,
            'total' => 55,
            'max' => 10,
            'min' => 1,
            'ave' => 6,
        ];
        $this->assertEquals($expected2, $this->target->getStatistic([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
    }

    public function testArrayColumn()
    {
        // データ
        $rows = [
            ['name' => 'user A', 'age' => 15, 'email' => 'aa@sample.com'],
            ['name' => 'user B', 'age' => 20, 'email' => 'bb@sample.com'],
            ['name' => 'user C', 'age' => 25, 'email' => 'cc@sample.com'],
        ];

        // email の配列が返ってくるはず
        $expected = [
            'aa@sample.com',
            'bb@sample.com',
            'cc@sample.com',
        ];

        $this->assertEquals($expected, $this->target->getArrayColumn($rows, 'email'));
    }
}
