<?php

$baseDirPath = '.././';									// phpファイルが「php」フォルダ内にあるので、index.htmlと同じ階層指定にするために必要な記述
$targetTextFile = $baseDirPath.$_POST['targetFile'];	// 処理対象ディレクトリ
$textData = "";											// jsに返すテキストファイルの中身を格納

// テキストファイルを開く
if ($fp = fopen($targetTextFile, "r")) {
	// 1行ずつ処理
	while(!feof($fp)) {
		$textData .= fgets($fp);	// jsに返す用の変数へ格納
	}
	fclose ($fp);					// ファイルを閉じる
}

// jsに返す値（削除したimagesのファイルパス）
echo $textData;

?>
