<?php
/**
 * 判断
 */

namespace App;

class IfElse
{
    /**
     * 大きい方の数値を返す
     *
     * 引数で受け取った2つの値で大きい方を返す
     * if 文を使って記述すること
     *
     * @param integer $a 整数
     * @param integer $b 整数
     *
     * @return integer
     */
    public function getLarger($a, $b)
    {
        // TODO: ここで、引数に取った値の大きい方を $ret にセットする
        // if 文を使って記述すること
        if ($a > $b)
        {
            return $ret = $a;
        }
        else
        {
            return $ret = $b;
        }
    }

    /**
     * 大きい方の数値を返す
     *
     * 引数で受け取った2つの値で大きい方を返す
     * 三項演算子を使って 1 行で記述すること
     *
     * @param integer $a 整数
     * @param integer $b 整数
     *
     * @return integer
     */
    public function getLargerTernary($a, $b)
    {
        // TODO: ここで、引数に取った値の大きい方を $ret にセットする
        // 三項演算子を使って１行で記述すること
        // $a > $b ? $ret = $a : $ret = $b;  // 自力
        // $ret = $a > $b ? $a : $b;  // 模範解答

        return $a > $b ? $a : $b;
    }

    /**
     * 絶対値を返す
     *
     * @param integer $num 整数
     *
     * @return integer
     */
    public function getAbsolute($num)
    {
        // TODO: ここで、絶対値を $ret にセットすること
        // abs() 関数を使わずに if 文を使って絶対値を算出してください
        if ($num < 0)
        {
            $num = -1 * $num;
        }
        return $num;

    }
}
