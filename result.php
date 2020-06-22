<?php

header('Content-Type: text/html; charset=UTF=8');

// numパラメーターにセットする値
$num = 111;
// WebAPIのURL　gitにあげるからIPアドレスをなんとなく消しておく。
$url = "http:///easyAPI/api.php?num=${num}";
// URLの内容を取得し、json形式からstdClass形式に変換して取得
$data = json_decode(file_get_contents($url));

// 連想配列でデータを取得したい場合は第二引数にtrueを入れる。
// 
// $data2 = json_decode(file_get_contents($url), true);

// dataのstatusがyesだったら、（出力に成功したら）
if($data->status == "Yes"){
    print $data -> x222;
}