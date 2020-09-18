<?php
#1
$name = "まな";
if ($name == "まな") {
    echo "私は" . $name . "です";
} else {
    echo "私は" . $name . "ではありません";
}
echo "\n";

#2
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

#3
$fruits = array ("ぶどう","マスカット","マンゴー","パッション","いちご");
foreach ($fruits as $fruit) {
    echo "食べたいのは" . $fruit;
    echo "\n";
}

#4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>