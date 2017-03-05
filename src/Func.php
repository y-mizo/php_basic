<?php
/**
 * 関数
 */

namespace App;

class Func
{
    /**
     * 未来の日付か判定する
     *
     * @param string $target_date "YYYY-MM-DD" 形式の文字列
     * @return boolean 引数が未来日付の時: true, 当日 or 過去日付の時: false
     */
    public function isFutureDate($target_date)
    {
        // TODO: ここで未来の日付かどうか判定する is_future_date() 関数を呼び出す
        // 関数はこのファイルの下の方で定義し、引数を適切に渡すこと
        return is_future_date($target_date);
    }

    /**
     * HTML の特殊文字列をエスケープする
     *
     * @param string $html エスケープする文字列
     * @return string エスケープ後の文字列
     */
    public function htmlEscape($html)
    {
        // TODO: ここで特殊文字列をエスケープする html_escape() 関数を呼び出す
        // 関数はこのファイルの下の方で定義し、引数を適切に渡すこと
        return html_escape($html);
    }

    /**
     * 消費税加算額の算出
     *
     * @param int $price 金額
     * @return int 消費税を含めた金額(少数以下切り捨て)
     */
    public function taxPrice($price)
    {
        // TODO: ここで消費税加算額を算出する tax_price() 関数を呼び出す
        // 関数はこのファイルの下の方で定義し、引数を適切に渡すこと
        return tax_price($price);
    }
}

/**
 * 未来の日付か判定する
 *
 * 補足説明
 * "YYYY-MM-DD" 形式の文字列を日付として比較するには
 * unix timestamp に変換する必要があります。
 * unix timestamp とはなにかを調べて実装してください。
 *
 * @param string $target_date "YYYY-MM-DD" 形式の文字列
 * @return boolean 引数が未来日付の時: true, 当日 or 過去日付の時: false
 */
function is_future_date($target_date)
{
    // TODO: 引数を適切に定義すること
    // 未来の日付か判定して、結果を返すこと
    $today = date("Y-m-d");
    // var_dump($today);
    if(strtotime($today) < strtotime($target_date))
    {
        $a = true;
        // echo 'future';
    }
    else
    {
        $a = false;
        // echo 'past';
    }
    return $a;
}

// isFutureDate("2016-10-16");

/**
 * HTML の特殊文字列をエスケープする
 *
 * 補足説明
 * PHP に htmlspecialchars() 関数がありますが
 * この関数を使わずに同じように動く関数を実装してください。
 * PHP の文字列置換用のビルトイン関数を使用してください。
 *
 *   &  ->  &amp;
 *   "  ->  &quot;
 *   '  ->  &apos;
 *   <  ->  &lt;
 *   >  ->  &gt;
 *
 * @param string $html エスケープする文字列
 * @return string エスケープ後の文字列
 */
function html_escape($html)
{
    // TODO: 引数を適切に定義すること
    // エスケープした文字列を返すこと
    $seach = ['&', '"', '\'', '<', '>'];
    $replace = ['&amp;', '&quot;', '&apos;', '&lt;', '&gt;'];
    return str_replace($seach, $replace, $html);
    // return str_replace('&', '&amp;', $html);
}

/**
 * 消費税加算額の算出
 *
 * 補足説明
 * 税率は、8% とする
 * 1円以下の端数が発生した場合は少数を切り捨てた整数部分のみを返す
 *
 * @param int $price 金額
 * @return int 消費税を含めた金額(少数以下切り捨て)
 */
function tax_price($price)
{
    // TODO: 引数を適切に定義すること
    // 消費税加算額を算出して返すこと
    $taxRate = 0.08;
    $totalPrice = $price + $price * $taxRate;
    return floor($totalPrice);
}
