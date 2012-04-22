<?php
// 設定ファイルを読み込みます
require_once('bootstrap.php');


// ユーザを追加
$random = rand(1, 10000);

$author = new Author();
$author->name = 'username-'.$random;
$author->password = 'password-'.$random;
$author->save();

// ユーザオブジェクトを取得
$id = array_shift($author->identifier());
$author = Doctrine_Core::getTable('Author')->find($id);


// パスワードを変更し、更新
$author->password = 'newpassword'.rand(1,100000);
$author->save();


// ユーザを削除
$author->delete();

