<?php
require_once 'bootstrap.php';

// ユーザを追加
$rand = rand(1, 10000);
$author = new Author();
$author->setName('name-'.$rand);
$author->setPassword(sha1('password-'.$rand));
$author->save($conn);

// ユーザオブジェクトを取得
$id = $author->getId();
$author = AuthorQuery::create()->findPK($id);


// パスワードを変更し、更新
$author->setPassword(sha1('newpassword-'.rand(1,100000)));
$author->save();


// ユーザを削除
$author->delete();

