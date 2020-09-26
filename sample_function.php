<?php
// 無限ループ
while (true) {
  // 何か処理する
}

// 文字列を配列に分割する。区切り文字スペースの場合
explode(' ', $array);

// 配列を文字列にする。改行でつなぐ
implode("\n", $array);

// 配列の最大値
max($array);

// 配列の最小値
min($array);

// 平方根（例は２乗）
pow($N, 2);

// 要素の最大値のキーを取得
$maxes = array_keys($array, max($array));

// 配列が空もしくはNULLかどうか判定
if (empty($array)) {
}

// 配列の要素をintに変換する
$tmp_array = array_map('intval', explode(' ', $array));

// 文字列の個数を検索する
// $base_str: 調べたい文字列
// $target_str: 見つけたい文字列
$count = mb_substr_count($base_str, $target_str);

// 配列の要素削除：キーを指定
unset($array[$index]);

// 配列の要素数を求める
count($array);

// 配列の先頭要素を削除する
$res = array_shift($array);

// 配列の要素を合計する
array_sum($array);

// 配列の重複を削除する
$array = array_unique($array);

// 配列に含まれているか
if (in_array($target, $array)) {
}

// 絶対値
abs($value);

// 複数キーでソートする
$medals = array();
for ($i = 0; $i < $N; ++$i) {
    $index = $i + 1;
    $tmp_array = explode(' ', $input_array[$index]);
    $gold = (int)$tmp_array[0];
    $silver = (int)$tmp_array[1];
    $copper = (int)$tmp_array[2];

    $medals[$index]['gold'] = $gold;
    $medals[$index]['silver'] = $silver;
    $medals[$index]['copper'] = $copper;
}
    
// メダル色でソートする
foreach ((array) $medals as $key => $value) {
    $sort_gold[$key] = $value['gold'];
    $sort_silver[$key] = $value['silver'];
    $sort_copper[$key] = $value['copper'];
}
array_multisort(
    $sort_gold, SORT_DESC,
    $sort_silver, SORT_DESC,
    $sort_copper, SORT_DESC,
    $medals);

// ゼロパティング
$str = str_pad($str, 2, '0', STR_PAD_RIGHT);
$str = str_pad($str, 2, '0', STR_PAD_LEFT);
$str = str_pad($str, 2, '0', STR_PAD_BOTH);

// 10進数を2進数に変換
decbin(10進数の数値);

// 2進数を10進数に変換
bindec( 2進数の文字列 );

// 四捨五入
round( 1.5 );

// 切り上げ
ceil( 1.5 );

// 切り捨て
floor( 1.5 );

// ソート降順 / 連想キーと要素との関係を維持する
arsort($array);

// ソート降順 / 連想キーと要素との関係を維持しない
rsort($array);

// 配列の要素数を数える
$tmp_array = array_count_values($array);

// 配列の要素の最大値のキーを取得する
$maxes = array_keys($hoge, max($array));
?>
