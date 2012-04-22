<?php
require_once 'bootstrap.php';

// ユーザを追加
$author = Author::create(array('name' => 'Test', 'password' => sha1('pasword-'.rand(1, 100000))));

// ユーザオブジェクトを読み込み
$author = Author::find($author->id);

// パスワードを変更し、更新
$author->password = sha1('newpassword-'.rand(1,100000));
$author->save();

// ユーザを削除
$author->delete();

