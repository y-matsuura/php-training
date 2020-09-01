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
array_sum($array)
?>
