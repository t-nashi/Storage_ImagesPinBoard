<?php

$baseDirPath 	= '.././';			// phpファイルが「php」フォルダ内にあるので、index.htmlと同じ階層指定にするために必要な記述

// ファイルパスセット
$oldImg 		= $baseDirPath.$_POST['oldImgFileName'];			// images/***
$newImg 		= $baseDirPath.$_POST['newImgFileName'];			// 
$oldMinImg 		= $baseDirPath.$_POST['oldMinImgFileName'];			// images/min/***
$newMinImg 		= $baseDirPath.$_POST['newMinImgFileName'];			// 
$oldTxt 		= $baseDirPath.$_POST['oldTxtFileName'];			// text/***
$newTxt 		= $baseDirPath.$_POST['newTxtFileName'];			// 

// ファイルリネーム
rename($oldImg, $newImg);
rename($oldTxt, $newTxt);

// ファイルが存在したらファイルリネーム
if(file_exists($oldMinImg)) {
	if($oldImg != $oldMinImg) {
		rename($oldMinImg, $newMinImg);
	}
}

// jsに返す値（リネームしたimagesのファイルパス）
echo $oldImg." → ".$newImg;

?>
