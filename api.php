<?php

// 文字コード設定
header('Content-Type: text/html; charset=UTF=8');

// numが存在するか、正規表現で数字のみの構成か確認
if(isset($_GET["num"]) && !preg_match('/[^0-9]/', $_GET["num"])){
    // numをエスケープする(XSS対策)
    $param = htmlspecialchars($_GET["num"]);
    // メイン処理
    $arr["status"] = "Yes";
    // 111倍
    $arr["x111"] = (string)((int)$param * 111);
    // 222倍
    $arr["x222"] = (string)((int)$param * 222);
}else{
    // paramの値が不正なら、statusをNoにしてプログラム終了
    $arr["status"] = "No";
}

// 配列をJSON形式にデコードして出力する。
print json_encode($arr, JSON_PRETTY_PRINT);