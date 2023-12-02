<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function showCalendar(Request $request)
    {

        $ym = $request->input('ym');

        // added this condition solve the problem of "1970-01"
        if (!$ym) {
            $ym = now()->format('Y-m');
        }
        //

        $calendarData = $this->calendar($ym);

        return view('guests.calendar')
            ->with('weeks', $calendarData['weeks'])
            ->with('html_title', $calendarData['html_title'])
            ->with('prev', $this->getPrevMonth($ym))
            ->with('next', $this->getNextMonth($ym));
    }

    public function calendar($ym)
    {
        // タイムゾーンを設定
        date_default_timezone_set('Asia/Tokyo');

         // 今月の年月を表示
        if (!$ym) {
            $ym = now()->format('Y-m');
        }

        // タイムスタンプを作成し、フォーマットをチェックする
        $timestamp = strtotime($ym . '-01'); //strtotimeは文字列を読んで、日付に変更してくれる。＄ｙｍの値が"2023-11"の文字列の場合、"2023-11-01"の日付として認識する。
        if ($timestamp === false) { //仮に$ymがnullの場合、strtotime（）はFalseの結果を出す
            $ym = now()->format('Y-m');
            $timestamp = strtotime($ym . '-01');
        }

        // 今日の日付 フォーマット　例）2021-06-3
        $today = now()->format('Y-m-d');

        // カレンダーのタイトルを作成　例）December 2023
        $html_title = date('F Y', $timestamp); //date()関数が、＄timestampの日付を読む、YとｎはDate()関数にデフォルトで用意された関数の引数、日付の年(Y)と月(n)を読みだすことができる機能。

        // 前月・次月の年月を取得
        $prev = date('Y-m', strtotime('-1 month', $timestamp)); 
        $next = date('Y-m', strtotime('+1 month', $timestamp));

        // 該当月の日数を取得
        $day_count = date('t', $timestamp); //date(t)は、月 指定した月の日数　例：	28～31
        // １日が何曜日か　0:日 1:月 2:火 ... 6:土
        $youbi = date('w', $timestamp); //date(w)は、数字　0(日曜) から 6(土曜)を取得する　例：	0～6

        // カレンダー作成の準備
        $weeks = [];
        $week = '';

        // 第１週目：空のセルを追加
        // 例）１日が火曜日だった場合、日・月曜日の２つ分の空セルを追加する
        $week .= str_repeat('<td></td>', $youbi);//str_repeat 関数は、指定された文字列を指定された回数だけ繰り返して生成した文字
                                                //最初の週の開始位置が計算され、開始する前は、前の月の日付のため空白のセルとなる。その後のループで各日に対応する <td> セルが追加されています。
                                                //.= は、文字列を連結するための演算子です。例：$example = 'Hello';$example .= ' World';echo $example;　結果：”Hello world”
        for ($day = 1; $day <= $day_count; $day++, $youbi++) {

            $date = $ym . '-' . str_pad($day, 2, '0', STR_PAD_LEFT); //例：2021-06-03 str_pad()で日に０を追加した。

            if ($today == $date) {
            // 今日の日付の場合は、class="today"をつける
                $week .= '<td class="today text-center">' . '<p>'.$day.'</p>';
            } else {
                $week .= '<td class="text-center">' . '<p>'.$day.'</p>';
            }
            $week .= '</td>';

            // 週終わり、または、月終わりの場合
            if ($youbi % 7 == 6 || $day == $day_count) { //$youbi % 7 は、$youbi を7で割った余りを計算する演算です。$youbi % 7 は0から6の範囲の値を取ります。これによって、週の何日目かを表現することができます。例えば、0は日曜日、1は月曜日、
                if ($day == $day_count) {
                // 月の最終日の場合、空セルを追加
                // 例）最終日が水曜日の場合、木・金・土曜日の空セルを追加
                    $week .= str_repeat('<td></td>', 6 - $youbi % 7);
                }
                // weeks配列にtrと$weekを追加する
                $weeks[] = '<tr>' . $week . '</tr>';
                // weekをリセット
                $week = '';
            }
        }
        //カレンダーの値を変数に導入する。
        return [
            'weeks' => $weeks,
            'html_title' => $html_title,
            'prev' => $prev,
            'next' => $next,
        ];
    }

    //先月の年と月を取得する
    private function getPrevMonth($ym)
    {
        $prevMonth = date('Y-m', strtotime('-1 month', strtotime($ym)));
        return $prevMonth;
    }

    //次月の年と月を取得する
    private function getNextMonth($ym)
    {
        $prevMonth = date('Y-m', strtotime('+1 month', strtotime($ym)));
        return $prevMonth;
    }
}
