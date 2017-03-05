<?php
/**
 * 繰り返し処理（for, foreach, while）
 */

namespace App;

class Loop
{
    /**
     * 等差数列の配列を返す
     *
     * 初期値 = 1, 差 = 3, 数 = 5 の時
     * [1, 4, 7, 10, 13] を返す
     *
     * @param integer $init 初期値
     * @param integer $diff 差
     * @param integer $num  数
     *
     * @return array
     */
    public function getSequence($init, $diff, $num)
    {
        $sequence = [];


        // TODO: ここで、等差数列の配列 $sequence を作成する

        for($i = 0; $i<$num; $i++)
        {
            // array_push($sequence,$init);
            $sequence[]=$init;
            $init += $diff;
        }
        return $sequence;
    }

    /**
     * 任意の文字が連続する文字列を返す
     *
     * 文字 = '@', 数 = 5 の時
     * '@@@@@' を返す
     *
     * @param string  $char 文字
     * @param integer $num  数
     *
     * @return string
     */
    // public function getCharLine($char, $num)
    // {
    //     // TODO: ここで、$char を $num 回分連続した文字列 $charLine を作成する
    //     // $char = '@';
    //     // $num = 5;
    //     $charLine = str_repeat($char,$num);

    //     return $charLine;
    // }

    public function getCharLine($char, $num)
    {
        // TODO: ここで、$char を $num 回分連続した文字列 $charLine を作成する
        // $char = '@';
        // $num = 5;
    $charline= '';
    for($i=0; $i<$num; $i++){
    $charline .= $char;  // 結合代入。「.=」
    }
    return $charline;
    }

// }

}
