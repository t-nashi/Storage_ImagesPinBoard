<?php

$baseDirPath = '.././';			// phpファイルが「php」フォルダ内にあるので、index.htmlと同じ階層指定にするために必要な記述

if(isset($_POST['textdata']) && $_POST['textdata'] != ''){

	$targetTextFile = $baseDirPath.$_POST['targetFile'];
	$text = htmlspecialchars($_POST['textdata'], ENT_COMPAT);

	$fp = fopen($targetTextFile, "w+");
		fwrite($fp, $text);
	fclose($fp);

	echo "save complete";

}elseif(isset($_POST['textdata']) && $_POST['textdata'] == '') {
	$text = htmlspecialchars($_POST['textdata'], ENT_COMPAT);

	$fp = fopen("memo.txt", "w+");
		fwrite($fp, $text);
	fclose($fp);

	echo "何も書かれていません！";
}

?>
