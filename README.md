# Storage_ImagesPinBoard
簡易的にタグ分類可能なメモ付き画像のアップロード＆管理が出来るツールです。
<br><br><br>


▽動作確認済み

...準備中...
<br><br><br>


## 解説サイト

...準備中...
<br><br><br>


## 注意 （Cautionn）

* 本プログラムご使用は自己責任でお願いいたします
<br><br><br>


## インストール （Installation）

1. このページの `Clone or download` ボタンよりリポジトリのクローンもしくはZIPダウンロードをします。
2. ZIPダウンロードの場合は解凍をします。
3. 解凍して出来たフォルダ内の「`public`」フォルダの中身を`php5`が動作する環境に配置します。
4. ブラウザ（Chrome最新版推奨）から「`index.html`」にhttpアクセスすれば利用可能です。
<br><br><br>


## 使用法 （Usage）

* 上記のインストール方法で配置したファイルへブラウザからhttpアクセスする

すでにいくつかのサンプル画像が入っているので配置後すぐに動作検証が可能です。
<br><br><br>


## 仕様 (Specification)

* index.html にアクセスすると「images」フォルダ内の画像ファイルを基準に「text」フォルダ内のテキスト内容を画面上に表示する
* 「images」と「images/min」内同ファイル名の画像が存在する場合は「images/min」が優先して表示される
* 画像ファイル名でアンダースコア三つ並びの前後「前___後」はそれぞれ「前： タグ」「後： ファイル名」という分類として扱っている
* タグはボタンとして表示され、押下するとそのタグの画像のみが表示されるフィルタの役割をしている
* 「DROP IMAGES HERE」内に画像ファイルをドラッグ＆ドロップすると「images」フォルダへファイルがアップロードされる
* 「SELECT IMAGES HERE」押下でも複数画像ファイルのアップロードが可能
* 一度に複数の画像ファイルをアップロードできるが、合計で`5MB`しかアップロードできない（php設定で上限アップ可能）
* アップロード画像が縦横それぞれ500px以上なら「images/min」の中に長辺を 500px に合わせた画像を生成する
* 画面右下の「OPTION」ボタン押下で各画像のファイル名とメモが編集可能になる
* 「×」（バツ）ボタン押下ですぐにファイルとメモが削除される
* ファイル名とメモは編集後「save」ボタンを押下しないと変更が反映されない
<br><br><br>


## 今後の改善点 (Future improvement points)

* 大量画像処理対応
* Lazy Load（画像の遅延読み込み）適用
* js＆php記述リファクタ  
    └ jsの処理の順番実行部分とか
* 処理のセキュア化
* デザイン改善
* アニメーション改善
* 画像の差し替え処理
* 元からファイル名が「tag___url.png」のファイルに対しての処理
* 複数人でさわったときどう処理・挙動させるか（ロック or マルチスレッド？ or 並列処理？）
* サムネイルサイズコントローラー設置
<br><br><br>


## コピーライト （Copyright）
Copyright © 2018+ Tsutomu Takanashi. See LICENSE for details.
