<?php

$baseDirPath = '.././';									// php�t�@�C�����uphp�v�t�H���_���ɂ���̂ŁAindex.html�Ɠ����K�w�w��ɂ��邽�߂ɕK�v�ȋL�q
$targetTextFile = $baseDirPath.$_POST['targetFile'];	// �����Ώۃf�B���N�g��
$textData = "";											// js�ɕԂ��e�L�X�g�t�@�C���̒��g���i�[

// �e�L�X�g�t�@�C�����J��
if ($fp = fopen($targetTextFile, "r")) {
	// 1�s������
	while(!feof($fp)) {
		$textData .= fgets($fp);	// js�ɕԂ��p�̕ϐ��֊i�[
	}
	fclose ($fp);					// �t�@�C�������
}

// js�ɕԂ��l�i�폜����images�̃t�@�C���p�X�j
echo $textData;

?>
