<?php 
#1. 引数に数値を指定して実行すると、数値を2倍にして返す関数
function mul ($num) {
    $num *= 2;
    return $num;
}
echo mul (8);
echo "\n";

#2. $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数
function sum ($a,$b) {
    $result = $a + $b;
    return $result;
}
echo sum (3,5);
echo "\n";

#3. $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数
/*これだとできない。
function mul2 ($arr) {
    foreach ($arr as $num) {
        $result *= $num;
    }
    return $result;
}
echo mul2 (array(1,3,5,7,9));*/

#3
//これは調べた
/*function mul2 ($arr) {
    $result = 1;
    foreach ($arr as $num) {
        $result *= $num;
    }
    echo $result;
    echo "\n";
}
$arr = array (1,3,5,7,9);
mul2($arr);*/

#3. 
$arr = array (1,3,5,7,9);
function mul2 ($arr) {
    //foreach内で使うために、とりあえず$resultを定義しておく
    $result = 1;
    foreach ($arr as $num) {
        $result *= $num;
    }
    return $result;
}
echo mul2($arr) . "\n";


#4. 配列の中で1番大きい値を返す max_array という関数を実装
//$arr2に設定し直しました
$arr2 = array(2,4,6,8,0);
//配列の中で1番大きい値を返す max_array という関数の実装
function max_array($arr2){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr2[0];
 foreach($arr2 as $a){
 //どうしたらいいかわからない・・・・
  if ($max_number < $a) {
      $max_number = $a;
  }
 }
 return $max_number;
 }
 echo max_array($arr2);
 echo "\n";

#5. 次のビルトイン関数の用途、使い方
//strip_tags…　htmlタグ、phpタグを文字列から取り除く
$str = "<h1>題名</h1><!-- コメントアウト --><p>これは本文です</p>";
echo strip_tags($str) ."\n";

//array_push…　配列の最後に要素を追加する
$food = array ("お寿司","パスタ","焼肉");
array_push ($food, "オムライス","ハンバーガー");
print_r ($food);

//array_merge…　配列の結合
$vegi = ["人参","じゃがいも","玉ねぎ"];
$else = ["とり肉","カレーのルー","スパイス"];
$curry = array_merge ($vegi,$else);
print_r ($curry);

//time…　現在のUnixタイムスタンプ(1970年1月1日00:00:00からの経過秒数)を取得する関数
echo "現在のUnixタイムスタンプ：" . time() . "\n";
//↑に(日数×1日24時間×60分×60秒)
$tomorrow = time() + (1 * 24 * 60 * 60);
echo "明日のUnixタイムスタンプ：" . $tomorrow . "\n";

//mktime… 指定した日時のUnixタイムスタンプ取得する関数
//1999年9月9日0時0分0秒
$timestamp = mktime (0, 0, 0, 9, 9, 1999);
echo $timestamp . "\n";

//date…　現在の日時を取得する関数
echo date('Y-m-d H:i:s') . "\n";
